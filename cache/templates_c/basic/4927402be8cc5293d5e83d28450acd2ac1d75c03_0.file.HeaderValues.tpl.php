<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:13:27
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\Detail\HeaderValues.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd9c73dce91_98089508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4927402be8cc5293d5e83d28450acd2ac1d75c03' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Detail\\HeaderValues.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd9c73dce91_98089508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'SHOW_HEADER_FIELD_VALUE' => 
  array (
    'compiled_filepath' => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\cache\\templates_c\\basic\\4927402be8cc5293d5e83d28450acd2ac1d75c03_0.file.HeaderValues.tpl.php',
    'uid' => '4927402be8cc5293d5e83d28450acd2ac1d75c03',
    'call_name' => 'smarty_template_function_SHOW_HEADER_FIELD_VALUE_63646452864abd9c739ccf1_18960253',
  ),
));
?><!-- tpl-Base-Detail-HeaderValues --><?php if (!empty($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['value'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['value'], 'FIELD_MODEL', false, 'NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HEADER_FIELD_VALUE', array(), true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['RECORD']->value->getField('assigned_user_id'));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewableInDetailView()) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HEADER_FIELD_VALUE', array(), true);
}
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['RECORD']->value->getField('shownerid'));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewableInDetailView()) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HEADER_FIELD_VALUE', array(), true);
}
}?><!-- /tpl-Base-Detail-HeaderValues -->
<?php }
/* smarty_template_function_SHOW_HEADER_FIELD_VALUE_63646452864abd9c739ccf1_18960253 */
if (!function_exists('smarty_template_function_SHOW_HEADER_FIELD_VALUE_63646452864abd9c739ccf1_18960253')) {
function smarty_template_function_SHOW_HEADER_FIELD_VALUE_63646452864abd9c739ccf1_18960253(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if (!$_smarty_tpl->tpl_vars['RECORD']->value->isEmpty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName())) {
$_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReferenceField() && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getHeaderValue('rel_fields',array()) && \App\Record::isExists($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()))) {
$_smarty_tpl->_assignInScope('REL_RECORD_MODEL', Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName())));
$_smarty_tpl->_assignInScope('REL_VALUES', array());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getHeaderValue('rel_fields',array()), 'REL_FIELD_NAME');
$_smarty_tpl->tpl_vars['REL_FIELD_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['REL_FIELD_NAME']->value) {
$_smarty_tpl->tpl_vars['REL_FIELD_NAME']->do_else = false;
if (!$_smarty_tpl->tpl_vars['REL_RECORD_MODEL']->value->isEmpty($_smarty_tpl->tpl_vars['REL_FIELD_NAME']->value) && $_smarty_tpl->tpl_vars['REL_RECORD_MODEL']->value->getField($_smarty_tpl->tpl_vars['REL_FIELD_NAME']->value)->isViewableInDetailView()) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['REL_VALUES']) ? $_smarty_tpl->tpl_vars['REL_VALUES']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['REL_FIELD_NAME']->value] = "<span class='u-fs-xs'>".((string)$_smarty_tpl->tpl_vars['REL_RECORD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['REL_FIELD_NAME']->value))."</span>";
$_smarty_tpl->_assignInScope('REL_VALUES', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['REL_VALUES']->value) {
$_smarty_tpl->_assignInScope('VALUE', ((($_smarty_tpl->tpl_vars['VALUE']->value).(' (')).(implode(', ',$_smarty_tpl->tpl_vars['REL_VALUES']->value))).(')'));
}
}?><div class="js-popover-tooltip--ellipsis-icon d-flex flex-nowrap align-items-center" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
" data-toggle="popover" data-js="popover | mouseenter"><span class="mr-1 text-muted u-white-space-nowrap"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span><span class="js-popover-text" data-js="clone"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</span><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span></div><?php }
}}
/*/ smarty_template_function_SHOW_HEADER_FIELD_VALUE_63646452864abd9c739ccf1_18960253 */
}
