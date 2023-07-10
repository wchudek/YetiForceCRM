<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:07:11
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\Edit\DefaultField\Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd84f1bb868_81057279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec839f958069a48c9943e33526d1c87f61afe964' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Edit\\DefaultField\\Base.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd84f1bb868_81057279 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-DefaultBase --><?php $_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue')));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD'=>false,'MODULE'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()), 0, true);
}
}
