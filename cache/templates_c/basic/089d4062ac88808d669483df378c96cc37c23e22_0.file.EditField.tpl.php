<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:07:10
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Settings\LayoutEditor\EditField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd84e9b25d0_62618016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089d4062ac88808d669483df378c96cc37c23e22' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Settings\\LayoutEditor\\EditField.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd84e9b25d0_62618016 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-EditField --><div><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('FIELD_LABEL_TRANSLATION', App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value));?><div class="modal-header"><h5 class="modal-title"><span class="yfi yfi-full-editing-view mr-2"></span><?php echo App\Language::translate('LBL_EDIT_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['FIELD_LABEL_TRANSLATION']->value;?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body pt-0"><form class="form-horizontal fieldDetailsForm sendByAjax validateForm" method="POST"><input type="hidden" name="module" value="LayoutEditor" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Field" /><input type="hidden" name="mode" value="save" /><input type="hidden" name="fieldid" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
" /><input type="hidden" name="sourceModule" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><div class="row mx-0 mb-2 py-2 border-bottom"><div class="col-md-6"><strong><?php echo App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong><?php echo $_smarty_tpl->tpl_vars['FIELD_LABEL_TRANSLATION']->value;?>
<br /><strong><?php echo App\Language::translate('LBL_FIELD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
</div><div class="col-md-6"><strong><?php echo App\Language::translate('LBL_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataTypeLabel()) {
echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataTypeLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?> (UiType: <?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType();?>
, <?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDBColumnType(true);?>
)<br /><strong><?php echo App\Language::translate('LBL_LENGTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength'), ENT_QUOTES, 'UTF-8', true);?>
</div></div><div class="row m-0"><div class="col-md-6 px-1"><div class="form-group"><label for="fieldMask"><strong><?php echo App\Language::translate('LBL_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class="input-group"><input type="text" name="label" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel());?>
" class="form-control" id="label" data-validation-engine="validate[maxSize[50]]" /></div></div><div class="checkbox my-1"><input type="hidden" name="mandatory" value="O" /><input type="checkbox" name="mandatory" id="mandatory" <?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?> checked <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatoryOptionDisabled()) {?> readonly="readonly" <?php }?>value="M" /><label for="mandatory" class="ml-1"><?php echo App\Language::translate('LBL_MANDATORY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="checkbox my-1"><input type="hidden" name="presence" value="1" /><input type="checkbox" name="presence" id="presence" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveField()) {?> checked="checked" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveOptionDisabled()) {?> readonly="readonly" class="optionDisabled" <?php }?> <?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?> readonly="readonly" <?php }?>value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('presence'), ENT_QUOTES, 'UTF-8', true);?>
" /><label for="presence" class="ml-1"><?php echo App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="checkbox my-1"><input type="hidden" name="quickcreate" value="1" /><input type="checkbox" name="quickcreate" id="quickcreate" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isQuickCreateEnabled()) {?> checked="checked" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isQuickCreateOptionDisabled()) {?> readonly="readonly" class="optionDisabled" <?php }?> <?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?> readonly="readonly" <?php }?>value="2" /><label for="quickcreate" class="ml-1"><?php echo App\Language::translate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="checkbox my-1"><input type="hidden" name="summaryfield" value="0" /><input type="checkbox" name="summaryfield" id="summaryfield" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isSummaryField()) {?> checked="checked" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isSummaryFieldOptionDisabled()) {?> readonly="readonly" class="optionDisabled" <?php }?> value="1" /><label for="summaryfield" class="ml-1"><?php echo App\Language::translate('LBL_SUMMARY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="checkbox my-1"><input type="hidden" name="header_field" value="0" /><input type="checkbox" name="header_field" id="header_field" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isHeaderField()) {?> checked <?php }?> value="1" /><label for="header_field" class="ml-1"><?php echo App\Language::translate('LBL_HEADER_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="js-toggle-hide form-group<?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isHeaderField()) {?> zeroOpacity <?php }?>" data-js="class:zeroOpacity"><?php $_smarty_tpl->_assignInScope('HEADER_FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getHeaderValue('class'));
$_smarty_tpl->_assignInScope('HEADER_FIELD_TYPE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getHeaderValue('type','value'));
$_smarty_tpl->_assignInScope('HEADER_REL_FIELDS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getHeaderValue('rel_fields',array()));?><select name="header_type" class="js-header_type form-control select2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getHeaderTypes(), 'VALUE', false, 'LABEL');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['VALUE']->value == $_smarty_tpl->tpl_vars['HEADER_FIELD_TYPE']->value) {?> selected <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReferenceField() && count($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList()) == 1) {?><div class="js-header_rel_fields mt-1<?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD_TYPE']->value != 'value') {?> d-none<?php }?>"><select name="header_rel_fields" multiple="multiple" class="form-control select2" data-select-cb="registerSelectSortable" data-maximum-selection-length="3"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList(), 'REL_MODULE');
$_smarty_tpl->tpl_vars['REL_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['REL_MODULE']->value) {
$_smarty_tpl->tpl_vars['REL_MODULE']->do_else = false;
$_smarty_tpl->_assignInScope('REL_MODULE_MODEL', \Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['REL_MODULE']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REL_MODULE_MODEL']->value->getFields(), 'REL_FIELD_MODEL', false, 'REL_FIELD_NAME');
$_smarty_tpl->tpl_vars['REL_FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['REL_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['REL_FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['REL_FIELD_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['REL_FIELD_MODEL']->value->isViewableInDetailView()) {
$_smarty_tpl->_assignInScope('ELEMENT_POSITION_IN_ARRAY', array_search($_smarty_tpl->tpl_vars['REL_FIELD_NAME']->value,$_smarty_tpl->tpl_vars['HEADER_REL_FIELDS']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['REL_FIELD_MODEL']->value->getName();?>
" data-field-name="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['REL_FIELD_NAME']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['ELEMENT_POSITION_IN_ARRAY']->value !== false) {?>data-sort-index="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ELEMENT_POSITION_IN_ARRAY']->value, ENT_QUOTES, 'UTF-8', true);?>
" selected="selected"<?php }?>data-js="data-sort-index|data-field-name"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['REL_FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['REL_FIELD_MODEL']->value->getModuleName());?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?><input name="header_class" value="<?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD_VALUE']->value) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['HEADER_FIELD_VALUE']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>badge-info<?php }?>" type="text" class="hide"></div></div><div class="checkbox"><input type="hidden" name="masseditable" value="2" /><input type="checkbox" name="masseditable" id="masseditable" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMassEditable()) {?> checked="checked" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMassEditOptionDisabled()) {?> readonly="readonly" <?php }?> value="1" /><label for="masseditable" class="ml-1"><?php echo App\Language::translate('LBL_MASS_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><?php if (App\Config::developer('CHANGE_GENERATEDTYPE')) {?><div class="checkbox"><input type="hidden" name="generatedtype" value="0" /><input type="checkbox" name="generatedtype" id="generatedtype" value="1" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('generatedtype') == 1) {?> checked <?php }?> /><label for="generatedtype" class="ml-1"><?php echo App\Language::translate('LBL_GENERATED_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><?php }?><div class="checkbox"><input type="hidden" name="defaultvalue" value="0" /><input type="checkbox" name="defaultvalue" id="defaultvalue" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> checked="checked" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isDefaultValueOptionDisabled()) {?> readonly="readonly" <?php }?> value="1" /><label for="defaultvalue" class="ml-1"><?php echo App\Language::translate('LBL_DEFAULT_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="js-toggle-hide form-group<?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> zeroOpacity <?php }?>" data-js="container"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isDefaultValueOptionDisabled() != "true") {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDefaultEditTemplateName(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div></div></div><div class="col-md-6 px-1"><?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(),array('string','currency','url','integer','double'))) {
$_smarty_tpl->_assignInScope('PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());
$_smarty_tpl->_assignInScope('MAX_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getMaxValue());
if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(),array('currency','integer','double'))) {
$_smarty_tpl->_assignInScope('MAX_VALUE', strlen(number_format($_smarty_tpl->tpl_vars['MAX_VALUE']->value,0,'','')));
}?><div class="form-group"><label for="fieldMask"><strong><?php echo App\Language::translate('LBL_FIELD_MASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class=" input-group"><input type="text" class="form-control" id="fieldMask" name="fieldMask"<?php if ($_smarty_tpl->tpl_vars['MAX_VALUE']->value) {?> data-validation-engine="validate[maxSize[<?php echo $_smarty_tpl->tpl_vars['MAX_VALUE']->value;?>
]]<?php }?>"value="<?php if ((isset($_smarty_tpl->tpl_vars['PARAMS']->value['mask']))) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PARAMS']->value['mask']);
}?>" /><div class="input-group-append"><span class="input-group-text js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo App\Language::translate('LBL_FIELD_MASK_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div></div><?php }?><div class="form-group"><label for="maxlengthtext"><strong><?php echo App\Language::translate('LBL_MAX_LENGTH_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><input type="text" class="form-control" id="maxlengthtext" name="maxlengthtext" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maxlengthtext'), ENT_QUOTES, 'UTF-8', true);?>
" /></div><div class="form-group"><label for="maxwidthcolumn"><strong><?php echo App\Language::translate('LBL_MAX_WIDTH_COLUMN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class=" input-group"><input type="text" class="form-control" id="maxwidthcolumn" name="maxwidthcolumn" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maxwidthcolumn');?>
" /><div class="input-group-append"><div class="input-group-text js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo App\Language::translate('LBL_MAX_WIDTH_COLUMN_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div></div></div></div><div class="form-group"><label for="tabindex"><strong><?php echo App\Language::translate('LBL_TABINDEX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class="input-group"><input type="text" class="form-control" id="tabindex" name="tabindex" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tabindex');?>
" /><div class="input-group-append"><div class="input-group-text js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo App\Language::translate('LBL_TABINDEX_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div></div></div></div><?php if (App\Config::developer('CHANGE_VISIBILITY')) {?><div class="form-group"><label for="displaytype"><strong><?php echo App\Language::translate('LBL_DISPLAY_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong><?php $_smarty_tpl->_assignInScope('DISPLAY_TYPE', Vtiger_Field_Model::showDisplayTypeList());?></label><div class="js-toggle-hide"><select name="displaytype" class="form-control select2" id="displaytype"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISPLAY_TYPE']->value, 'DISPLAY_TYPE_VALUE', false, 'DISPLAY_TYPE_KEY');
$_smarty_tpl->tpl_vars['DISPLAY_TYPE_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DISPLAY_TYPE_KEY']->value => $_smarty_tpl->tpl_vars['DISPLAY_TYPE_VALUE']->value) {
$_smarty_tpl->tpl_vars['DISPLAY_TYPE_VALUE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_TYPE_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['DISPLAY_TYPE_KEY']->value == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('displaytype')) {?> selected <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['DISPLAY_TYPE_VALUE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php }?><div class="form-group"><label for="anonymizationTarget"><strong><?php echo App\Language::translate('LBL_ANONYMIZATION_TARGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div><input type="hidden" name="anonymizationTarget" value="" /><select name="anonymizationTarget[]" multiple="true" class="form-control select2" id="anonymizationTarget"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Anonymization::getTypes(), 'LABEL', false, 'KEY');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['KEY']->value,$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('anonymizationTarget'))) {?>selected<?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group"><?php $_smarty_tpl->_assignInScope('FIELD_ICON_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldItemByName('icon'));?><label><strong><?php echo App\Language::translate('LBL_FIELD_ICON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class="fieldValue"><?php if ($_smarty_tpl->tpl_vars['FIELD_ICON_MODEL']->value->isEditableReadOnly()) {?><input type="text" disabled="disabled" class="form-control-plaintext" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_ICON_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_ICON_MODEL']->value->get('fieldvalue'),false,false,true));?>
" /><?php } else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_ICON_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_ICON_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'RECORD'=>null), 0, true);
}?></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL','MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), 0, true);
?></form></div></div><!-- /tpl-Settings-LayoutEditor-EditField -->
<?php }
}
