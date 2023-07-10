<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:13:28
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\Detail\Field\Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd9c830b019_26563319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46bf62df796970f171c507f1d8d7220b54e2750d' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\Base.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd9c830b019_26563319 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Detail-Field-Base u-paragraph-m-0 u-word-break"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
</div>
<?php }
}
