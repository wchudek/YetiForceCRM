import BottomSheet from '../components/dialog-bottom-sheet/BottomSheet.js'
import globalDialog from '../utils/private/global-dialog.js'

export default {
  install ({ $q }) {
    this.create = $q.bottomSheet = globalDialog(BottomSheet)
  }
}
