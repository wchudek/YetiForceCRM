<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:03:30
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Settings\LayoutEditor\CreateFieldModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd7723be401_29966785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c0cf6a5e5baf5eeebec8df193c2d570f639cda3' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Settings\\LayoutEditor\\CreateFieldModal.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd7723be401_29966785 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-LayoutEditor-CreateFieldModal modal createFieldModal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo App\Language::translate('LBL_CREATE_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal createCustomFieldForm" method="POST"><div class="modal-body"><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo App\Language::translate('LBL_SELECT_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="fieldTypesList form-control" name="fieldType"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADD_SUPPORTED_FIELD_TYPES']->value, 'FIELD_TYPE');
$_smarty_tpl->tpl_vars['FIELD_TYPE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->value) {
$_smarty_tpl->tpl_vars['FIELD_TYPE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
"<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_TYPE_INFO']->value[$_smarty_tpl->tpl_vars['FIELD_TYPE']->value], 'TYPE_INFO_VALUE', false, 'TYPE_INFO');
$_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TYPE_INFO']->value => $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value) {
$_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_TYPE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right fieldLabelForm"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><input type="text" maxlength="50" name="fieldLabel" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" class="form-control" data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array(array('name'=>'FieldLabel'))));?>
' /></div></div><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right fieldNameForm"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_FIELD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><input type="text" maxlength="30" name="fieldName" value="" data-validation-engine="validate[required, funcCall[Vtiger_FieldName_Validator_Js.invokeValidation]]" class="form-control" /></div></div><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span><?php echo App\Language::translate('LBL_TABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="marginLeftZero form-control" name="fieldTypeList"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getEntityInstance()->tab_name, 'TABLE');
$_smarty_tpl->tpl_vars['TABLE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABLE']->value) {
$_smarty_tpl->tpl_vars['TABLE']->do_else = false;
if (in_array($_smarty_tpl->tpl_vars['TABLE']->value,array('vtiger_crmentity','vtiger_entity_stats'))) {
continue 1;
}?><option value="<?php echo $_smarty_tpl->tpl_vars['TABLE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['TABLE']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getEntityInstance()->table_name) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['TABLE']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row align-items-center supportedType lengthsupported"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_LENGTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><input type="text" name="fieldLength" value="" data-validation-engine="validate[required, custom[integer], funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" class="form-control" /></div></div><div class="form-group row align-items-center supportedType decimalsupported d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_DECIMALS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><input type="text" name="decimal" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" class="form-control" /></div></div><div class="form-group row align-items-center supportedType preDefinedValueExists d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select id="pickListValues" class="form-control" name="pickListValues" multiple="" tabindex="-1" aria-hidden="true" placeholder="<?php echo App\Language::translate('LBL_ENTER_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array(array('name'=>'PicklistFieldValues'))));?>
'></select></div></div><div class="form-group row align-items-center supportedType preDefinedModuleList d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_RELATION_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select <?php if ($_smarty_tpl->tpl_vars['FIELD_TYPE_INFO']->value['Related1M']['ModuleListMultiple'] == true) {?>multiple="multiple" <?php }?>class="referenceModule form-control" name="referenceModule"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row align-items-center supportedType preMultiReferenceValue d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_MULTI_REFERENCE_VALUE_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="MRVModule form-control" name="MRVModule"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getRelations(), 'RELATION');
$_smarty_tpl->tpl_vars['RELATION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATION']->value) {
$_smarty_tpl->tpl_vars['RELATION']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('modulename');?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['RELATION']->value->get('label'),$_smarty_tpl->tpl_vars['RELATION']->value->get('modulename'));?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row align-items-center supportedType preMultiReferenceValue d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_MULTI_REFERENCE_VALUE_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="MRVField form-control" name="MRVField"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getRelations(), 'RELATION');
$_smarty_tpl->tpl_vars['RELATION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATION']->value) {
$_smarty_tpl->tpl_vars['RELATION']->do_else = false;
$_smarty_tpl->_assignInScope('COUNT_FIELDS', count($_smarty_tpl->tpl_vars['RELATION']->value->getFields()));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION']->value->getFields(), 'FIELD', false, 'KEY');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
if (!(isset($_smarty_tpl->tpl_vars['LAST_BLOCK']->value)) || $_smarty_tpl->tpl_vars['LAST_BLOCK']->value->id != $_smarty_tpl->tpl_vars['FIELD']->value->get('block')->id) {?><optgroup label="<?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('block')->label,$_smarty_tpl->tpl_vars['RELATION']->value->get('modulename'));?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('modulename');?>
"><?php }?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getId();?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATION']->value->get('modulename'));?>
</option><?php if ($_smarty_tpl->tpl_vars['COUNT_FIELDS']->value == ($_smarty_tpl->tpl_vars['KEY']->value-1)) {?></optgroup><?php }
$_smarty_tpl->_assignInScope('LAST_BLOCK', $_smarty_tpl->tpl_vars['FIELD']->value->get('block'));
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row align-items-center supportedType preMultiReferenceValue d-none"><div class="col-md-3 col-form-label text-right"><?php echo App\Language::translate('LBL_MULTI_REFERENCE_VALUE_FILTER_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="filterField form-control" name="MRVFilterField"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getRelations(), 'RELATION');
$_smarty_tpl->tpl_vars['RELATION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATION']->value) {
$_smarty_tpl->tpl_vars['RELATION']->do_else = false;
?><option value="-" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('modulename');?>
"><?php echo App\Language::translate('--None--');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION']->value->getFields('picklist'), 'FIELD', false, 'KEY');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getName();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('modulename');?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATION']->value->get('modulename'));?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row align-items-center supportedType preMultiReferenceValue d-none"><div class="col-md-3 col-form-label text-right"><?php echo App\Language::translate('LBL_MULTI_REFERENCE_VALUE_FILTER_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="MRVModule form-control" name="MRVFilterValue"></select></div></div><div class="form-group row align-items-center supportedType picklistOption d-none"><div class="col-md-3 col-form-label text-right">&nbsp;</div><div class="col-md-8 controls"><label class="checkbox"><input type="checkbox" class="checkbox" name="isRoleBasedPickList" value="1">&nbsp;<?php echo App\Language::translate('LBL_ROLE_BASED_PICKLIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><div class="form-group row align-items-center supportedType coordinateOption d-none"><div class="col-md-3 col-form-label text-right"><?php echo App\Language::translate('LBL_COORDINATE_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select name="type" class="form-control"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Fields\MapCoordinates::COORDINATE_FORMATS, 'COOR_LABEL', false, 'COOR_KEY');
$_smarty_tpl->tpl_vars['COOR_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['COOR_KEY']->value => $_smarty_tpl->tpl_vars['COOR_LABEL']->value) {
$_smarty_tpl->tpl_vars['COOR_LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['COOR_KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['COOR_LABEL']->value,'OpenStreetMap');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row align-items-center supportedType coordinateOption d-none"><div class="col-md-3 col-form-label text-right">&nbsp;</div><div class="col-md-8 controls"><label class="checkbox"><input type="checkbox" class="checkbox" name="isCoordinateType" value="1">&nbsp;<?php echo App\Language::translate('LBL_SHOW_LIST_COORDINATE_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><div class="form-group row align-items-center supportedType coordinateOption d-none"><div class="col-md-3 col-form-label text-right">&nbsp;</div><div class="col-md-8 controls"><label class="checkbox"><input type="checkbox" class="checkbox" name="isCoordinateMap" value="1">&nbsp;<?php echo App\Language::translate('LBL_SHOW_BUTTON_COORDINATE_MAP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><div class="form-group row align-items-center supportedType coordinateOption d-none"><div class="col-md-3 col-form-label text-right">&nbsp;</div><div class="col-md-8 controls"><label class="checkbox"><input type="checkbox" class="checkbox" name="isCoordinateMeLokaction" value="1">&nbsp;<?php echo App\Language::translate('LBL_SHOW_BUTTON_MY_LOCATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><div class="form-group row align-items-center supportedType preDefinedTreeList d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_TREE_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="TreeList form-control" name="tree" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getTreeTemplates($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value), 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row align-items-center supportedType js-server-access-list d-none" data-js="removeClass:d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('WebserviceApps','Settings:WebserviceApps');?>
</div><div class="col-md-8 controls"><select class="form-control" name="server" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_WebserviceApps_Module_Model::getServers(), 'SERVER', false, 'key');
$_smarty_tpl->tpl_vars['SERVER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['SERVER']->value) {
$_smarty_tpl->tpl_vars['SERVER']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SERVER']->value['name']);?>
 (<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SERVER']->value['type'],'Settings:WebserviceApps');?>
)</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row align-items-center supportedType js-group-module-option d-none" data-js="removeClass:d-none"><div class="col-md-3 col-form-label text-right"><?php echo App\Language::translate('LBL_ALL_GROUPS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="js-popover-tooltip ml-1" data-toggle="popover" data-placement="top" data-content="<?php echo App\Language::translate('LBL_ALL_GROUPS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-js="popover"><span class="fas fa-info-circle"></span></span></div><div class="col-md-8 controls"><input type="checkbox" class="checkbox" name="showAllGroups" value="1"></div></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div>
<?php }
}
