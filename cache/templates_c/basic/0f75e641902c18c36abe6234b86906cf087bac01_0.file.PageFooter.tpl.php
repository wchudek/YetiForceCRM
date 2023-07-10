<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:00:14
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\PageFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6ae8af5b0_37410095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f75e641902c18c36abe6234b86906cf087bac01' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\PageFooter.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6ae8af5b0_37410095 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-PageFooter --></div><input type="hidden" id="processEvents" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(App\Process::getEvents()));?>
" /><?php if ($_smarty_tpl->tpl_vars['SHOW_FOOTER']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (\App\Debuger::isDebugBar()) {
echo \App\Debuger::getDebugBar()->getJavascriptRenderer()->render();
}?></body></html><!-- /tpl-Base-PageFooter -->
<?php }
}
