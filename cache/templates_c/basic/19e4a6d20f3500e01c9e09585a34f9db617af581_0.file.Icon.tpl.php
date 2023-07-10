<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:07:11
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Settings\Vtiger\Edit\Field\Icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd84f2550d3_27493548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e4a6d20f3500e01c9e09585a34f9db617af581' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Settings\\Vtiger\\Edit\\Field\\Icon.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd84f2550d3_27493548 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-Edit-Field-Icon --><?php $_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('TABINDEX', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex());
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('RAW_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));
$_smarty_tpl->_assignInScope('FIELD_VALUE', \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['RAW_VALUE']->value,$_smarty_tpl->tpl_vars['RECORD']->value)));
$_smarty_tpl->_assignInScope('IS_EDITABLE_READ_ONLY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly());?><div class="js-icon-container"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="hidden" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RAW_VALUE']->value);?>
" class="js-source-field" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' /><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
 "><div class="input-group-prepend"><label class="input-group-text js-icon-show p-1 pl-2 pr-2 u-fs-xlg"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['RAW_VALUE']->value);?>
</label></div><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
_display" type="text" title="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" class="form-control"tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
" <?php }?> /><div class="input-group-append u-cursor-pointer"><button class="btn btn-light js-clear-selection" type="button" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['IS_EDITABLE_READ_ONLY']->value) {?>disabled<?php }?>><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_clear" class="fas fa-times-circle" title="<?php echo \App\Language::translate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><button class="btn btn-light js-icon-select" type="button" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" title="<?php echo \App\Language::translate('LBL_BROWSE_ASSETS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['IS_EDITABLE_READ_ONLY']->value) {?>disabled<?php }?>><span class="far fa-folder-open"></span></button></div></div></div><!-- /tpl-Settings-Base-Edit-Field-Icon -->
<?php }
}
