<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:00:14
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\JSResources.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6aec4a157_60436722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a427f3e334ebd5b0d71353d9b9327702ecd7b107' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\JSResources.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6aec4a157_60436722 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-JSResources --><div id="javascript"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOOTER_SCRIPTS']->value, 'jsModel', false, 'index');
$_smarty_tpl->tpl_vars['jsModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
$_smarty_tpl->tpl_vars['jsModel']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- /tpl-Base-JSResources -->
<?php }
}
