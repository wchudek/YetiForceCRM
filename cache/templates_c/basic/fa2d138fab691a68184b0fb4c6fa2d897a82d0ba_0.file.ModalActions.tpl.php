<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:01:08
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\Edit\ModalActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6e4378e88_42188026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2d138fab691a68184b0fb4c6fa2d897a82d0ba' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Edit\\ModalActions.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6e4378e88_42188026 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-EditViewActionsModal --><div class="w-100 d-flex justify-content-center"><?php $_smarty_tpl->_assignInScope('SINGLE_MODULE_NAME', ('SINGLE_').($_smarty_tpl->tpl_vars['MODULE_NAME']->value));?><button class="btn btn-success js-form-submit-btn mr-1" type="submit" disabled="disabled" data-js="disabled" <?php if (Vtiger_Field_Model::$tabIndexLastSeq) {?>tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" <?php }?>><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><button class="btn btn-danger mr-2" type="button" data-dismiss="modal" <?php if (Vtiger_Field_Model::$tabIndexLastSeq) {?>tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" <?php }?>><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RecordCollector') && !empty($_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR'])) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/RecordCollectors.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_COLLECTOR'=>$_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR']), 0, true);
}?></div><!-- /tpl-Base-EditViewActionsModal -->
<?php }
}
