<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:13:27
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\Detail\HeaderHighlights.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd9c75e3e48_58910259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a560c1752efd7e3df2bbe2f5538084c1d15c0a43' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Detail\\HeaderHighlights.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd9c75e3e48_58910259 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-HeaderHighlights --><?php if ((isset($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['highlights'])) || $_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value) {
if ($_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value, 'ROW');
$_smarty_tpl->tpl_vars['ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->tpl_vars['ROW']->do_else = false;
?><div class="badge badge-info d-flex flex-nowrap align-items-center justify-content-center my-1 js-popover-tooltip--ellipsis" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['title']);?>
 <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['badge']);?>
" data-toggle="popover"data-js="popover | mouseenter"<?php if ((isset($_smarty_tpl->tpl_vars['ROW']->value['action'])) && $_smarty_tpl->tpl_vars['ROW']->value['action']) {?>onclick="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['action']);?>
" <?php }?>><div class="c-popover-text"><span class="mr-1"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['title'];?>
</span><?php echo $_smarty_tpl->tpl_vars['ROW']->value['badge'];?>
</div><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ((isset($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['highlights']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['highlights'], 'FIELD_MODEL', false, 'NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (!$_smarty_tpl->tpl_vars['RECORD']->value->isEmpty($_smarty_tpl->tpl_vars['NAME']->value)) {
$_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['NAME']->value));?><div class="badge <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getHeaderValue('class')) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getHeaderValue('class');
} else { ?>badge-info<?php }?> d-flex flex-nowrap align-items-center justify-content-center mt-1 js-popover-tooltip--ellipsis"data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
: <string><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
</string>"data-toggle="popover" data-js="popover | mouseenter"><div class="c-popover-text"><span class="mr-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</div><span class="fas fa-info-circle fa-sm js-popover-icon d-none" data-js="class: d-none"></span></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}?><!-- /tpl-Base-Detail-HeaderHighlights -->
<?php }
}
