<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:03:29
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Settings\LayoutEditor\Tabs\DetailViewLayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd771aeaaf6_98537420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e402cd5634592ba12c3f7fa7f7c7aaefe2d9f20a' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Settings\\LayoutEditor\\Tabs\\DetailViewLayout.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd771aeaaf6_98537420 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-Tabs-DetailViewLayout --><?php $_smarty_tpl->_assignInScope('FIELD_TYPE_INFO', $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getAddFieldTypeInfo());
$_smarty_tpl->_assignInScope('IS_SORTABLE', $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isSortableAllowed());
$_smarty_tpl->_assignInScope('IS_BLOCK_SORTABLE', $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isBlockSortableAllowed());
$_smarty_tpl->_assignInScope('ALL_BLOCK_LABELS', array());
if ($_smarty_tpl->tpl_vars['IS_SORTABLE']->value) {?><div class="btn-toolbar" id="layoutEditorButtons"><button class="btn btn-success addButton addCustomBlock"><span class="fas fa-plus mr-2"></span><?php echo App\Language::translate('LBL_ADD_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success saveFieldSequence ml-3 d-none"><span class="fas fa-check mr-2"></span><?php echo App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-default ml-3 js-inactive-fields-btn"><span class="fas fa-ban mr-2"></span><?php echo App\Language::translate('LBL_INACTIVE_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><?php }?><div class="moduleBlocks"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'BLOCK_MODEL', false, 'BLOCK_LABEL_KEY');
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value => $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value) {
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('FIELDS_LIST', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getLayoutBlockActiveFields());
$_smarty_tpl->_assignInScope('BLOCK_ID', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id'));
$_tmp_array = isset($_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']) ? $_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['BLOCK_ID']->value] = $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;
$_smarty_tpl->_assignInScope('ALL_BLOCK_LABELS', $_tmp_array);?><div id="block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
"class="editFieldsTable block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
 mb-2 border1px <?php if ($_smarty_tpl->tpl_vars['IS_BLOCK_SORTABLE']->value) {?> blockSortable<?php }?> js-block-container"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('sequence');?>
"style="border-radius: 4px;background: white;" data-js="container"><div class="layoutBlockHeader d-flex flex-wrap justify-content-between m-0 p-1 pt-1 w-100"><div class="blockLabel u-white-space-nowrap"><?php if ($_smarty_tpl->tpl_vars['IS_BLOCK_SORTABLE']->value) {?><img class="align-middle" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" alt="" /> &nbsp;&nbsp;<?php }?><strong class="align-middle js-block-label" title="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;?>
" data-js="container"><?php if (!empty($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('icon'))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('icon');?>
 mr-2"></span><?php }
echo App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</strong></div><div class="btn-toolbar pl-1" role="toolbar"><?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isAddCustomFieldEnabled()) {?><div class="btn-group btn-group-sm u-h-fit mr-1 mt-1"><button class="btn btn-success addCustomField" type="button"><span class="fas fa-plus u-mr-5px"></span><strong><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="btn-group btn-group-sm u-h-fit mr-1 mt-1"><button class="btn btn-warning js-add-system-field" type="button" data-js="click"><span class="fas fa-plus-circle u-mr-5px"></span><strong><?php echo App\Language::translate('BTN_ADD_SYSTEM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }?><div class="btn-group btn-group-sm btn-group-toggle mt-1" data-toggle="buttons"><label class="js-block-visibility btn btn-outline-secondary c-btn-collapsible <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden()) {?> active<?php }?>" data-visible="0"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
" data-js="click | data"><input type="radio" name="options" id="options-option1" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden()) {?> checked<?php }?>><span class="fas fa-fw mr-1 fa-eye-slash"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_ALWAYS_HIDE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><label class="js-block-visibility btn btn-outline-secondary c-btn-collapsible <?php if (!$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden() && !$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> active<?php }?>" data-visible="1"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
" data-js="click | data"><input type="radio" name="options" id="options-option2" autocomplete="off" <?php if (!$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden() && !$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> checked<?php }?>><span class="fas fa-fw mr-1  fa-eye"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_ALWAYS_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><label class="js-block-visibility btn btn-outline-secondary c-btn-collapsible <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> active<?php }?>" data-visible="2"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
" data-js="click | data"><input type="radio" name="options" id="options-option3" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> checked<?php }?>><span class="fas fa-fw mr-1  fa-atom"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_DYNAMIC_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label></div><?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isCustomized()) {?><div class="btn-group btn-group-sm ml-1 mt-1 u-h-fit" role="group"><button class="js-delete-custom-block-btn c-btn-collapsible btn btn-danger js-popover-tooltip" data-js="click"><span class="fas fa-trash-alt mr-1"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_DELETE_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></button></div><?php }?></div></div><div class="blockFieldsList blockFieldsSortable row m-0 p-1 u-min-height-50"><?php
$_smarty_tpl->tpl_vars['LOOP'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['LOOP']->step = 1;$_smarty_tpl->tpl_vars['LOOP']->total = (int) ceil(($_smarty_tpl->tpl_vars['LOOP']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['LOOP']->step));
if ($_smarty_tpl->tpl_vars['LOOP']->total > 0) {
for ($_smarty_tpl->tpl_vars['LOOP']->value = 0, $_smarty_tpl->tpl_vars['LOOP']->iteration = 1;$_smarty_tpl->tpl_vars['LOOP']->iteration <= $_smarty_tpl->tpl_vars['LOOP']->total;$_smarty_tpl->tpl_vars['LOOP']->value += $_smarty_tpl->tpl_vars['LOOP']->step, $_smarty_tpl->tpl_vars['LOOP']->iteration++) {
$_smarty_tpl->tpl_vars['LOOP']->first = $_smarty_tpl->tpl_vars['LOOP']->iteration === 1;$_smarty_tpl->tpl_vars['LOOP']->last = $_smarty_tpl->tpl_vars['LOOP']->iteration === $_smarty_tpl->tpl_vars['LOOP']->total;?><ul name="<?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isFieldsSortableAllowed($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value)) {?>sortable<?php echo $_smarty_tpl->tpl_vars['LOOP']->value+1;
}?>"class="sortTableUl js-sort-table<?php echo $_smarty_tpl->tpl_vars['LOOP']->value+1;?>
 connectedSortable col-md-6 mb-1" data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_LIST']->value, 'FIELD_MODEL', false, NULL, 'fieldlist', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index'] : null)%2 == $_smarty_tpl->tpl_vars['LOOP']->value) {?><li><div class="opacity editFields ml-0 border1px" data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="px-2 py-1 d-flex"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());?><div class="col-12 pr-0 fieldContainer" style="word-wrap: break-word;"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a class="mr-3"><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" alt="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a><?php }?><span class="fieldLabel"><?php $_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('icon'));
if ($_smarty_tpl->tpl_vars['ICON']->value) {
echo \App\Layout\Media::getImageHtml($_smarty_tpl->tpl_vars['ICON']->value);
}
echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
<span class="redColor <?php if (!$_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?>d-none<?php }?>">*</span><span class="ml-3 badge badge-secondary d-none d-sm-inline-block"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
</span><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataTypeLabel()) {?><span class="ml-3 badge badge-info d-none d-sm-inline-block"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataTypeLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><?php }?></span><span class="float-right actions"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" id="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" /><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><button class="btn btn-success btn-xs editFieldDetails ml-1" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="yfi yfi-full-editing-view"></span></button><?php }?><button class="btn btn-primary btn-xs copyFieldLabel ml-1" data-target="relatedFieldValue<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" title="<?php echo App\Language::translate('LBL_COPY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-copy"></span></button><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable() && !$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveOptionDisabled()) {?><button class="btn btn-default btn-xs js-disable-field ml-1" title="<?php echo App\Language::translate('LBL_DISABLE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-ban"></span></button><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isCustomField() == 'true') {?><button class="btn btn-danger btn-xs deleteCustomField ml-1" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-trash-alt"></span></button><?php }?><button class="btn btn-info btn-xs js-context-help ml-1" data-js="click" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-url="index.php?module=LayoutEditor&parent=Settings&view=HelpInfo&field=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
&source=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" title="<?php echo App\Language::translate('LBL_CONTEXT_HELP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></button></span></div></div></div></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}
?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><input type="hidden" class="inActiveFieldsArray" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['IN_ACTIVE_FIELDS']->value));?>
' /><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('NewCustomBlock.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AddBlockModal.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('CreateFieldModal.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('InactiveFieldModal.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Settings-LayoutEditor-Tabs-DetailViewLayout -->
<?php }
}
