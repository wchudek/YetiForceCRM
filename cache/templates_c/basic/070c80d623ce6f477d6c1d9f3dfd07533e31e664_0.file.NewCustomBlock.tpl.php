<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:03:30
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Settings\LayoutEditor\NewCustomBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd7720ed806_45323062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '070c80d623ce6f477d6c1d9f3dfd07533e31e664' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Settings\\LayoutEditor\\NewCustomBlock.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd7720ed806_45323062 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="newCustomBlockCopy d-none mb-2 border1px <?php if (!empty($_smarty_tpl->tpl_vars['IS_BLOCK_SORTABLE']->value)) {?>blockSortable <?php }?>" data-block-id="" data-sequence="" style="border-radius: 4px; background: white;"><div class="layoutBlockHeader d-flex flex-wrap justify-content-between m-0 p-1 pt-1 w-100"><div class="blockLabel u-white-space-nowrap"><img class="align-middle" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" alt="" />&nbsp;&nbsp;</div><div class="btn-toolbar pl-1" role="toolbar" aria-label="Toolbar with button groups"><div class="btn-group btn-group-sm u-h-fit mr-1 mt-1"><button class="btn btn-success addCustomField" type="button"><span class="fas fa-plus u-mr-5px"></span><strong><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="btn-group btn-group-sm btn-group-toggle mt-1" data-toggle="buttons"><label class="js-block-visibility btn btn-outline-secondary c-btn-collapsible <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden()) {?> active<?php }?>" data-visible="0"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
" data-js="click | data"><input type="radio" name="options" id="options-option1" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden()) {?> checked<?php }?>><span class="fas fa-fw mr-1 fa-eye-slash"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_ALWAYS_HIDE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><label class="js-block-visibility btn btn-outline-secondary c-btn-collapsible <?php if (!$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden() && !$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> active<?php }?>" data-visible="1"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
" data-js="click | data"><input type="radio" name="options" id="options-option2" autocomplete="off" <?php if (!$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isHidden() && !$_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> checked<?php }?>><span class="fas fa-fw mr-1 fa-eye"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_ALWAYS_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><label class="js-block-visibility btn btn-outline-secondary c-btn-collapsible <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> active<?php }?>" data-visible="2"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id');?>
" data-js="click | data"><input type="radio" name="options" id="options-option3" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isDynamic()) {?> checked<?php }?>><span class="fas fa-fw mr-1 fa-atom"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_DYNAMIC_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label></div><div class="btn-group btn-group-sm ml-1 mt-1 u-h-fit" role="group" aria-label="Third group"><button class="js-delete-custom-block-btn c-btn-collapsible btn btn-danger js-popover-tooltip" data-js="click"><span class="fas fa-trash-alt mr-1"></span><span class="c-btn-collapsible__text"><?php echo App\Language::translate('LBL_DELETE_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></button></div></div></div><div class="blockFieldsList row blockFieldsSortable m-0 p-1" style="min-height: 27px;"><ul class="sortTableUl js-sort-table1 connectedSortable col-md-6 ui-sortable p-1" style="list-style-type: none; float: left;min-height:1px;" name="sortable1"></ul><ul class="sortTableUl js-sort-table2 connectedSortable col-md-6 ui-sortable m-0 p-1" style="list-style-type: none; float: left;min-height:1px;" name="sortable2"></ul></div></div>
<?php }
}
