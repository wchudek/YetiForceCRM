import Vue from 'vue'

import HistoryMixin from '../../mixins/history.js'
import TimeoutMixin from '../../mixins/timeout.js'
import ModelToggleMixin from '../../mixins/model-toggle.js'
import PortalMixin from '../../mixins/portal.js'
import PreventScrollMixin from '../../mixins/prevent-scroll.js'
import AttrsMixin, { ariaHidden } from '../../mixins/attrs.js'
import TransitionMixin from '../../mixins/transition.js'

import { childHasFocus } from '../../utils/dom.js'
import EscapeKey from '../../utils/private/escape-key.js'
import { slot } from '../../utils/private/slot.js'
import { create, stop } from '../../utils/event.js'
import cache from '../../utils/private/cache.js'
import { addFocusFn } from '../../utils/private/focus-manager.js'
import { client } from '../../plugins/Platform.js'

let maximizedModals = 0

const positionClass = {
  standard: 'fixed-full flex-center',
  top: 'fixed-top justify-center',
  bottom: 'fixed-bottom justify-center',
  right: 'fixed-right items-center',
  left: 'fixed-left items-center'
}

const defaultTransitions = {
  standard: ['scale', 'scale'],
  top: ['slide-down', 'slide-up'],
  bottom: ['slide-up', 'slide-down'],
  right: ['slide-left', 'slide-right'],
  left: ['slide-right', 'slide-left']
}

const backdropAttrs = {
  ...ariaHidden,
  tabindex: -1
}

export default Vue.extend({
  name: 'QDialog',

  mixins: [
    AttrsMixin,
    TransitionMixin,
    HistoryMixin,
    TimeoutMixin,
    ModelToggleMixin,
    PortalMixin,
    PreventScrollMixin
  ],

  props: {
    persistent: Boolean,
    autoClose: Boolean,
    allowFocusOutside: Boolean,

    noEscDismiss: Boolean,
    noBackdropDismiss: Boolean,
    noRouteDismiss: Boolean,
    noRefocus: Boolean,
    noFocus: Boolean,
    noShake: Boolean,

    seamless: Boolean,

    maximized: Boolean,
    fullWidth: Boolean,
    fullHeight: Boolean,

    square: Boolean,

    position: {
      type: String,
      default: 'standard',
      validator: val => val === 'standard' ||
        ['top', 'bottom', 'left', 'right'].includes(val)
    },

    transitionShow: String,
    transitionHide: String
  },

  data () {
    return {
      animating: false
    }
  },

  watch: {
    maximized (state) {
      this.showing === true && this.__updateMaximized(state)
    },

    useBackdrop (v) {
      this.__preventScroll(v)
      this.__preventFocusout(v)
    }
  },

  computed: {
    classes () {
      return `q-dialog__inner--${this.maximized === true ? 'maximized' : 'minimized'} ` +
        `q-dialog__inner--${this.position} ${positionClass[this.position]}` +
        (this.animating === true ? ' q-dialog__inner--animating' : '') +
        (this.fullWidth === true ? ' q-dialog__inner--fullwidth' : '') +
        (this.fullHeight === true ? ' q-dialog__inner--fullheight' : '') +
        (this.square === true ? ' q-dialog__inner--square' : '')
    },

    defaultTransitionShow () {
      return defaultTransitions[this.position][0]
    },

    defaultTransitionHide () {
      return defaultTransitions[this.position][1]
    },

    useBackdrop () {
      return this.showing === true && this.seamless !== true
    },

    hideOnRouteChange () {
      return this.persistent !== true &&
        this.noRouteDismiss !== true &&
        this.seamless !== true
    },

    onEvents () {
      const on = {
        ...this.qListeners,
        // stop propagating these events from children
        input: stop,
        'popup-show': stop,
        'popup-hide': stop
      }

      if (this.autoClose === true) {
        on.click = this.__onAutoClose
      }

      return on
    },

    attrs () {
      return {
        role: 'dialog',
        'aria-modal': this.useBackdrop === true ? 'true' : 'false',
        ...this.qAttrs
      }
    }
  },

  methods: {
    focus (selector) {
      addFocusFn(() => {
        let node = this.__getInnerNode()

        if (node === void 0 || node.contains(document.activeElement) === true) {
          return
        }

        node = (selector !== '' ? node.querySelector(selector) : null) ||
          node.querySelector('[autofocus][tabindex], [data-autofocus][tabindex]') ||
          node.querySelector('[autofocus] [tabindex], [data-autofocus] [tabindex]') ||
          node.querySelector('[autofocus], [data-autofocus]') ||
          node
        node.focus({ preventScroll: true })
      })
    },

    shake (focusTarget) {
      if (focusTarget && typeof focusTarget.focus === 'function') {
        focusTarget.focus({ preventScroll: true })
      }
      else {
        this.focus()
      }

      this.$emit('shake')

      const node = this.__getInnerNode()

      if (node !== void 0) {
        node.classList.remove('q-animate--scale')
        node.classList.add('q-animate--scale')
        clearTimeout(this.shakeTimeout)
        this.shakeTimeout = setTimeout(() => {
          node.classList.remove('q-animate--scale')
        }, 170)
      }
    },

    __getInnerNode () {
      return this.__portal !== void 0 && this.__portal.$refs !== void 0
        ? this.__portal.$refs.inner
        : void 0
    },

    __show (evt) {
      this.__addHistory()

      // IE can have null document.activeElement
      this.__refocusTarget = client.is.mobile !== true && this.noRefocus === false && document.activeElement !== null
        ? document.activeElement
        : void 0

      this.$el.dispatchEvent(create('popup-show', { bubbles: true }))
      this.__updateMaximized(this.maximized)

      EscapeKey.register(this, escEvt => {
        if (this.seamless !== true) {
          if (this.persistent === true || this.noEscDismiss === true) {
            this.maximized !== true && this.noShake !== true && this.shake()
          }
          else {
            this.$emit('escape-key')
            this.hide(escEvt)
          }
        }
      })

      this.__showPortal()
      this.animating = true

      if (this.noFocus !== true) {
        // IE can have null document.activeElement
        document.activeElement !== null && document.activeElement.blur()
        this.__registerTick(this.focus)
      }
      else {
        this.__removeTick()
      }

      // should __removeTimeout() if this gets removed
      this.__registerTimeout(() => {
        if (this.$q.platform.is.ios === true) {
          if (this.seamless !== true && document.activeElement) {
            const
              { top, bottom } = document.activeElement.getBoundingClientRect(),
              { innerHeight } = window,
              height = window.visualViewport !== void 0
                ? window.visualViewport.height
                : innerHeight

            if (top > 0 && bottom > height / 2) {
              document.scrollingElement.scrollTop = Math.min(
                document.scrollingElement.scrollHeight - height,
                bottom >= innerHeight
                  ? Infinity
                  : Math.ceil(document.scrollingElement.scrollTop + bottom - height / 2)
              )
            }

            document.activeElement.scrollIntoView()
          }

          // required in order to avoid the "double-tap needed" issue
          this.__portal.$el.click()
        }

        this.animating = false
        this.__showPortal(true) // done showing
        this.$emit('show', evt)
      }, 300)
    },

    __hide (evt) {
      this.__removeTick()
      this.__removeHistory()
      this.__cleanup(true)
      this.__hidePortal()
      this.animating = true

      // check null for IE
      if (this.__refocusTarget !== void 0 && this.__refocusTarget !== null) {
        ((evt && evt.type.indexOf('key') === 0
          ? this.__refocusTarget.closest('[tabindex]:not([tabindex^="-"])')
          : void 0
        ) || this.__refocusTarget).focus()
        this.__refocusTarget = void 0
      }

      this.$el.dispatchEvent(create('popup-hide', { bubbles: true }))

      // should __removeTimeout() if this gets removed
      this.__registerTimeout(() => {
        this.__hidePortal(true) // done hiding, now destroy
        this.animating = false
        this.$emit('hide', evt)
      }, 300)
    },

    __cleanup (hiding) {
      clearTimeout(this.shakeTimeout)

      if (hiding === true || this.showing === true) {
        EscapeKey.pop(this)
        this.__updateMaximized(false)

        if (this.seamless !== true) {
          this.__preventScroll(false)
          this.__preventFocusout(false)
        }
      }
    },

    __updateMaximized (active) {
      if (active === true) {
        if (this.isMaximized !== true) {
          maximizedModals < 1 && document.body.classList.add('q-body--dialog')
          maximizedModals++

          this.isMaximized = true
        }
      }
      else if (this.isMaximized === true) {
        if (maximizedModals < 2) {
          document.body.classList.remove('q-body--dialog')
        }

        maximizedModals--
        this.isMaximized = false
      }
    },

    __preventFocusout (state) {
      if (this.$q.platform.is.desktop === true) {
        const action = `${state === true ? 'add' : 'remove'}EventListener`
        document.body[action]('focusin', this.__onFocusChange)
      }
    },

    __onAutoClose (e) {
      this.hide(e)
      this.qListeners.click !== void 0 && this.$emit('click', e)
    },

    __onBackdropClick (e) {
      if (this.persistent !== true && this.noBackdropDismiss !== true) {
        this.hide(e)
      }
      else if (this.noShake !== true) {
        this.shake(e.relatedTarget)
      }
    },

    __onFocusChange (e) {
      // the focus is not in a vue child component
      if (
        this.allowFocusOutside !== true &&
        this.__portalIsAccessible === true &&
        childHasFocus(this.__portal.$el, e.target) !== true
      ) {
        this.focus('[tabindex]:not([tabindex="-1"])')
      }
    },

    __renderPortal (h) {
      return h('div', {
        staticClass: `q-dialog fullscreen no-pointer-events q-dialog--${this.useBackdrop === true ? 'modal' : 'seamless'}`,
        class: this.contentClass,
        style: this.contentStyle,
        attrs: this.attrs
      }, [
        h('transition', {
          props: { name: 'q-transition--fade' }
        }, this.useBackdrop === true ? [
          h('div', {
            staticClass: 'q-dialog__backdrop fixed-full',
            attrs: backdropAttrs,
            on: cache(this, 'bkdrop', {
              [ this.backdropEvt ]: this.__onBackdropClick
            })
          })
        ] : null),

        h('transition', {
          props: { ...this.transitionProps }
        }, [
          this.showing === true ? h('div', {
            ref: 'inner',
            staticClass: 'q-dialog__inner flex no-pointer-events',
            class: this.classes,
            attrs: { tabindex: -1 },
            on: this.onEvents
          }, slot(this, 'default')) : null
        ])
      ])
    }
  },

  created () {
    this.__useTick('__registerTick', '__removeTick')
    this.__useTimeout('__registerTimeout')
    this.backdropEvt = this.$q.platform.is.ios === true || this.$q.platform.is.safari ? 'click' : 'focusin'
  },

  mounted () {
    this.__processModelChange(this.value)
  },

  beforeDestroy () {
    this.__cleanup()
    this.__refocusTarget = void 0
  }
})
