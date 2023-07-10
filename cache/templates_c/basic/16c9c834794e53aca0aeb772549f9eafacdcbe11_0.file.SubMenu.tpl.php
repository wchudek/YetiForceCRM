<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:00:12
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\menu\SubMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6ac81cb65_19465976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16c9c834794e53aca0aeb772549f9eafacdcbe11' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\menu\\SubMenu.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6ac81cb65_19465976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if ((isset($_smarty_tpl->tpl_vars['MENU']->value['childs'])) && smarty_modifier_count($_smarty_tpl->tpl_vars['MENU']->value['childs']) != 0) {
$_smarty_tpl->_assignInScope('MENUS', $_smarty_tpl->tpl_vars['MENU']->value['childs']);
if (((isset($_smarty_tpl->tpl_vars['MENU']->value['active'])) && $_smarty_tpl->tpl_vars['MENU']->value['active']) || $_smarty_tpl->tpl_vars['PARENT_MODULE']->value == $_smarty_tpl->tpl_vars['MENU']->value['id']) {
$_smarty_tpl->_assignInScope('EXPAND', 'true');
} else {
$_smarty_tpl->_assignInScope('EXPAND', 'false');
}?><div class="tpl-menu-SubMenu js-submenu collapse<?php if ($_smarty_tpl->tpl_vars['EXPAND']->value == 'true') {?> show<?php }?>" id="submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" data-js="bootstrap:collapse" data-parent="#submenu-<?php if ((isset($_smarty_tpl->tpl_vars['MENU']->value['parent']))) {
echo $_smarty_tpl->tpl_vars['MENU']->value['parent'];
} else { ?>0<?php }?>"><ul class="nav flex-column"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENUS']->value, 'MENU', false, 'KEY');
$_smarty_tpl->tpl_vars['MENU']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['MENU']->value) {
$_smarty_tpl->tpl_vars['MENU']->do_else = false;
$_smarty_tpl->_assignInScope('MENU_MODULE', 'Menu');
if ((isset($_smarty_tpl->tpl_vars['MENU']->value['moduleName']))) {
$_smarty_tpl->_assignInScope('MENU_MODULE', $_smarty_tpl->tpl_vars['MENU']->value['moduleName']);
}
$_smarty_tpl->_assignInScope('HASCHILDS', (isset($_smarty_tpl->tpl_vars['MENU']->value['childs'])) && smarty_modifier_count($_smarty_tpl->tpl_vars['MENU']->value['childs']) != 0);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath((('menu/').($_smarty_tpl->tpl_vars['MENU']->value['type'])).('.tpl'),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
}
}
