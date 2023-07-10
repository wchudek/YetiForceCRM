<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:00:16
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\Modals\Footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6b0d0d811_38178341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cdf98be9782fdb97a14f7b1777ef73e6f6b611' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Modals\\Footer.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6b0d0d811_38178341 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-Footer --><div class="modal-footer <?php if ((isset($_smarty_tpl->tpl_vars['FOOTER_CLASS']->value))) {
echo $_smarty_tpl->tpl_vars['FOOTER_CLASS']->value;
}?>"><?php if (!empty($_smarty_tpl->tpl_vars['BTN_LINKS']->value)) {?><div class="actions"><div class="float-right"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BTN_LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic','MODULE_NAME'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
if (!empty($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value)) {?><button class="js-modal__save btn btn-success" type="submit" name="saveButton" data-js="click"><span class="<?php if ((isset($_smarty_tpl->tpl_vars['BTN_SUCCESS_ICON']->value))) {
echo $_smarty_tpl->tpl_vars['BTN_SUCCESS_ICON']->value;
} else { ?>fas fa-check<?php }?> mr-1"></span><?php if (!empty($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value)) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value);
}?></button><?php }
if (!empty($_smarty_tpl->tpl_vars['BTN_DANGER']->value) && empty($_smarty_tpl->tpl_vars['LOCK_EXIT']->value)) {?><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><?php if (!empty($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value)) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_DANGER']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_DANGER']->value);
}?></button><?php }?></div><!-- /tpl-Base-Modals-Footer -->
<?php }
}
