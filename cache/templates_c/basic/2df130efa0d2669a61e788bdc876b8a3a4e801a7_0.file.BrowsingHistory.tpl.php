<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:00:13
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\BrowsingHistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6ad8c49d4_50023526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df130efa0d2669a61e788bdc876b8a3a4e801a7' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\BrowsingHistory.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6ad8c49d4_50023526 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-BrowsingHistory dropdown-menu historyList js-scrollbar" aria-labelledby="showHistoryBtn" role="list" data-js="perfectscrollbar"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BROWSING_HISTORY']->value, 'HISTORY');
$_smarty_tpl->tpl_vars['HISTORY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HISTORY']->value) {
$_smarty_tpl->tpl_vars['HISTORY']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewToday']))) {?><h6 class="dropdown-header selectorHistory"><?php echo \App\Language::translate('LBL_TODAY');?>
</h6><?php } elseif ((isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewYesterday']))) {?><h6 class="dropdown-header selectorHistory"><?php echo \App\Language::translate('LBL_YESTERDAY');?>
</h6><?php } elseif ((isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewOlder']))) {?><h6 class="dropdown-header selectorHistory"><?php echo \App\Language::translate('LBL_YESTERDAY');?>
</h6><?php }?><a class="item dropdown-item" href="/<?php echo $_smarty_tpl->tpl_vars['HISTORY']->value['url'];?>
" role="listitem"><?php if ($_smarty_tpl->tpl_vars['HISTORY']->value['hour']) {?><span class="historyHour"><?php echo $_smarty_tpl->tpl_vars['HISTORY']->value['date'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['HISTORY']->value['date'];
}
echo " | ";
echo $_smarty_tpl->tpl_vars['HISTORY']->value['title'];?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="dropdown-divider"></div><a class="dropdown-item js-clear-history" data-js="click" href="#" role="listitem"><?php echo \App\Language::translate('LBL_CLEAR_HISTORY');?>
</a></div>
<?php }
}
