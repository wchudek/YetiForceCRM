<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:13:18
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\EditViewActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd9be60c639_65300121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24e5193e1333f2f8f7da79ca17cb44af9837917f' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\EditViewActions.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd9be60c639_65300121 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-EditViewActions --><div class="c-form__action-panel"><?php $_smarty_tpl->_assignInScope('SINGLE_MODULE_NAME', ('SINGLE_').($_smarty_tpl->tpl_vars['MODULE_NAME']->value));?><button class="btn btn-success js-form-submit-btn mr-1" type="submit" disabled="disabled" data-js="disabled" <?php if (Vtiger_Field_Model::$tabIndexLastSeq) {?>tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" <?php }?>><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><button class="btn btn-danger mr-2" type="reset" onclick="javascript:window.history.back();" <?php if (Vtiger_Field_Model::$tabIndexLastSeq) {?>tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" <?php }?>><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php if ((isset($_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_HEADER']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_HEADER'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'editViewHeader'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RecordCollector') && !empty($_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR'])) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/RecordCollectors.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_COLLECTOR'=>$_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR']), 0, true);
}?></div></form></div></div><!-- /tpl-Base-EditViewActions -->
<?php }
}
