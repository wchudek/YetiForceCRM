<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:01:06
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\QuickCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6e2be8e04_72661008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfd520daa34ce8ede70693fd9de9f718fe4ccd75' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\QuickCreate.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6e2be8e04_72661008 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-QuickCreate --><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SCRIPTS']->value, 'jsModel', false, 'index');
$_smarty_tpl->tpl_vars['jsModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
$_smarty_tpl->tpl_vars['jsModel']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="modal quickCreateContainer" tabindex="-3" role="dialog"><div class="modal-dialog modal-lg modal-full" role="document"><div class="modal-content"><form class="form-horizontal recordEditView js-form" name="<?php echo $_smarty_tpl->tpl_vars['FROM_VIEW']->value;?>
" method="post" action="index.php" enctype="multipart/form-data"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="fromView" value="<?php echo $_smarty_tpl->tpl_vars['FROM_VIEW']->value;?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value)) {?><input type="hidden" name="fromModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><?php }?><input type="hidden" id="preSaveValidation" value="<?php echo !empty(\App\EventHandler::getByType(\App\EventHandler::EDIT_VIEW_PRE_SAVE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
" /><input type="hidden" class="js-change-value-event" value="<?php echo \App\EventHandler::getVarsByType(\App\EventHandler::EDIT_VIEW_CHANGE_VALUE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value,array($_smarty_tpl->tpl_vars['RECORD']->value,$_smarty_tpl->tpl_vars['FROM_VIEW']->value));?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value) && !empty($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) && !empty($_smarty_tpl->tpl_vars['SOURCE_RECORD']->value)) {?><input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
" /><input type="hidden" name="relationOperation" value="<?php echo $_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value;?>
" /><?php }
if (!empty($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value)) {?><input type="hidden" name="mappingRelatedField" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value);?>
' /><?php }
if (!empty($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value)) {?><input type="hidden" name="listFilterFields" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value);?>
' /><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HIDDEN_INPUT']->value, 'INPUT_VALUE', false, 'INPUT_NAME');
$_smarty_tpl->tpl_vars['INPUT_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['INPUT_NAME']->value => $_smarty_tpl->tpl_vars['INPUT_VALUE']->value) {
$_smarty_tpl->tpl_vars['INPUT_VALUE']->do_else = false;
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['INPUT_NAME']->value;?>
" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['INPUT_VALUE']->value);?>
' /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!empty($_smarty_tpl->tpl_vars['SOURCE_RELATED_FIELD']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_RELATED_FIELD']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><div class="d-none fieldValue source-related-fields" data-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div class="modal-header align-items-center form-row d-flex justify-content-between py-2"><div class="col-xl-6 col-12"><h5 class="modal-title form-row text-center text-xl-left mb-2 mb-xl-0"><span class="col-12"><span class="fas fa-plus mr-1"></span><strong class="mr-1"><?php echo \App\Language::translate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :</strong><strong class="text-uppercase"><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
 mx-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SINGLE_MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span></h5></div><div class="col-xl-6 col-12 text-center text-xl-right"><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RecordCollector') && !empty($_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR'])) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/RecordCollectors.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SHOW_BTN_LABEL'=>1,'RECORD_COLLECTOR'=>$_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR']), 0, true);
}
$_smarty_tpl->_assignInScope('EDIT_VIEW_URL', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl());
if (!empty($_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['QUICKCREATE_VIEW_HEADER'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['QUICKCREATE_VIEW_HEADER'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'quickcreateViewHeader','CLASS'=>'display-block-md','TABINDEX'=>Vtiger_Field_Model::$tabIndexLastSeq), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><button class="btn btn-success mr-1" type="submit" tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" title="<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><strong><span class="fas fa-check"></span></strong></button><button class="cancelLink btn btn-danger" tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" data-dismiss="modal" type="button" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span class="fas fa-times"></span></button></div></div><div class="quickCreateContent"><div class="modal-body m-0"><?php if ($_smarty_tpl->tpl_vars['LAYOUT']->value === 'blocks') {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditBlocks.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value), 0, true);
} else { ?><div class="border-0 px-1 mx-auto m-0"><div class="px-0 m-0 form-row d-flex justify-content-center"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_start' || $_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_end') && ($_smarty_tpl->tpl_vars['MODULE_NAME']->value === 'OSSTimeControl' || $_smarty_tpl->tpl_vars['MODULE_NAME']->value === 'Reservations')) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 2) {?></div><div class="col-12 form-row d-flex justify-content-center px-0 m-0"><?php $_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}?><div class="col-md-6 py-2 form-row d-flex justify-content-center px-0 m-0 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 "><div class="fieldLabel col-lg-12 col-xl-3 pl-0 text-lg-left text-xl-right u-text-ellipsis"><?php $_smarty_tpl->_assignInScope('HELPINFO_LABEL', \App\Language::getTranslateHelpInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value,$_smarty_tpl->tpl_vars['VIEW']->value));?><label class="text-right muted small font-weight-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
if ($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value;?>
"data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></a><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div class="fieldValue col-lg-12 col-xl-9 px-0 px-sm-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 1) {?><div class="col-md-6 form-row align-items-center p-1 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"></div><?php }?></div></div><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/ModalActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('EDITVIEW_LINKS'=>$_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value), 0, true);
?></div></div></form></div></div></div><!-- /tpl-Base-QuickCreate -->
<?php }
}
