<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:01:16
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Settings\Vtiger\SettingsMenuStart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6eca51577_82497161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ceb02c24d3520c8e18e1c9fa01f34d74ed12dfc' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Settings\\Vtiger\\SettingsMenuStart.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6eca51577_82497161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser() && !\App\YetiForce\Register::verify(true)) {
$_smarty_tpl->_assignInScope('COMPANIES_LINK', \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
if (\App\Security\AdminAccess::isPermitted('Companies')) {
ob_start();
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('COMPANIES_LINK', "<a href=\"index.php?module=Companies&parent=Settings&view=List&displayModal=online\">".$_prefixVariable1."</a>");
}?><div class="o-register-error bg-danger text-white u-font-weight-700 w-100 pb-1 pt-1 justify-content-center d-flex js-popover-tooltip--ellipsis-icon" data-content="<?php echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,\App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['COMPANIES_LINK']->value));?>
"data-toggle="popover" data-js="popover | mouseenter"><div class="text-truncate px-1"><span class="fas fa-exclamation-triangle mr-2" title="<?php echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span><?php echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['COMPANIES_LINK']->value);?>
</div><span class="js-popover-icon d-none mr-1" data-js="class: d-none"><span class="fas fa-info-circle fa-sm"></span></span></div><?php }
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser() && !\App\SystemWarnings\YetiForce\Newsletter::emailProvided()) {
$_smarty_tpl->_assignInScope('COMPANIES_LINK', \App\Language::translate('LBL_YETIFORCE_NEWSLETTER_FILL_DATA',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
if (\App\Security\AdminAccess::isPermitted('Companies')) {
ob_start();
echo \App\Language::translate('LBL_YETIFORCE_NEWSLETTER_FILL_DATA',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('COMPANIES_LINK', "<a href=\"index.php?module=Companies&parent=Settings&view=List&displayModal=online\">".$_prefixVariable2."</a>");
}?><div class="o-register-warning bg-warning text-white u-font-weight-700 w-100 pb-1 pt-1 justify-content-center d-flex js-popover-tooltip--ellipsis-icon" data-content="<?php echo \App\Language::translateArgs('LBL_YETIFORCE_NEWSLETTER_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,\App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['COMPANIES_LINK']->value));?>
"data-toggle="popover" data-js="popover | mouseenter"><div class="text-truncate px-1"><span class="fas fa-exclamation-triangle mr-2" title="<?php echo \App\Language::translate('LBL_YETIFORCE_NEWSLETTER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span><?php echo \App\Language::translateArgs('LBL_YETIFORCE_NEWSLETTER_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['COMPANIES_LINK']->value);?>
</div><span class="js-popover-icon d-none mr-1" data-js="class: d-none"><span class="fas fa-info-circle fa-sm"></span></span></div><?php }?><div class="mainContainer"><div class="contentsDiv">
<?php }
}
