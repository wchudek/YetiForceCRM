<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:13:47
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\ListViewContentsBottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd9db583b58_82170008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f67e07ccb8e0ca7ecd5c1f2dd9d1775b8b177d6' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\ListViewContentsBottom.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd9db583b58_82170008 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ListViewContentsBottom --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_RECORDS_NO_FOUND');?>
. <?php if ($_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl();?>
"><?php echo \App\Language::translate('LBL_CREATE_SINGLE_RECORD');?>
</a><?php }?></td></tr></tbody></table><?php }?><!-- /tpl-Base-ListViewContentsBottom -->
<?php }
}
