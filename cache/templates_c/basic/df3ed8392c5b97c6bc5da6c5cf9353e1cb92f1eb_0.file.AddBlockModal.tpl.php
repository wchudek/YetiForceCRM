<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:03:30
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Settings\LayoutEditor\AddBlockModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd772265b12_07716427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3ed8392c5b97c6bc5da6c5cf9353e1cb92f1eb' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Settings\\LayoutEditor\\AddBlockModal.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd772265b12_07716427 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal addBlockModal fade tpl-Settings-LayoutEditor-AddBlockModal"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5><?php echo App\Language::translate('LBL_ADD_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal addCustomBlockForm"><div class="modal-body"><div class="form-group"><div class="col-md-3 col-form-label"><span class="redColor">*</span><span><?php echo App\Language::translate('LBL_BLOCK_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-md-8 controls"><input type="text" name="label" class="form-control" data-validation-engine="validate[required]" /></div></div><div class="form-group"><div class="col-md-3 col-form-label"><?php echo App\Language::translate('LBL_ADD_AFTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="form-control" name="beforeBlockId"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']->value, 'BLOCK_LABEL', false, 'BLOCK_ID');
$_smarty_tpl->tpl_vars['BLOCK_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_ID']->value => $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value) {
$_smarty_tpl->tpl_vars['BLOCK_LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div>
<?php }
}
