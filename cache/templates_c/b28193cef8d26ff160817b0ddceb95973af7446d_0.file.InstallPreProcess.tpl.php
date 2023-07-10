<?php
/* Smarty version 4.3.1, created on 2023-07-10 09:56:20
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\install\tpl\InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd5c4c2ac02_35598956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28193cef8d26ff160817b0ddceb95973af7446d' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\install\\tpl\\InstallPreProcess.tpl',
      1 => 1688982687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
  ),
),false)) {
function content_64abd5c4c2ac02_35598956 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-install-tpl-InstallPreProcess --><?php $_smarty_tpl->_subTemplateRender('file:Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="w-100 bg-light o-install__header__wrapper"><div class="container px-2 px-sm-3"><header class="d-flex flex-nowrap align-items-center"><div class="logo"><img src="../<?php echo \App\Layout::getPublicUrl('layouts/resources/Logo/logo_yetiforce.png');?>
"alt="<?php echo \App\Language::translate('LBL_COMPANY_LOGO_TITLE','Install');?>
 YetiForce"></div><div class="pl-1 pl-sm-3"><h1 class="h3"><?php echo \App\Language::translate('LBL_INSTALLATION_WIZARD','Install');?>
</h1></div></header></div></div><?php if ($_smarty_tpl->tpl_vars['MODE']->value === 'step7') {?><div id="progressIndicator" class="main-container"><div class="inner-container py-5"><div class="col-12 text-center py-5"><h3><?php echo \App\Language::translate('LBL_INSTALLATION_IN_PROGRESS','Install');?>
...</h3><br><img src="../<?php echo \App\Layout::getPublicUrl('layouts/basic/images/install_loading.gif');?>
" class="mb-3" alt="Install loading"><br><h6><?php echo \App\Language::translate('LBL_STEP7_DESCRIPTION','Install');?>
</h6><ul class="text-center list-inline"><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" target="_blank" href="https://yetiforce.com"><span class="fas fa-link"></span><span class="sr-only">yetiforce.com</span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" target="_blank" href="https://doc.yetiforce.com"><span class="mdi mdi-book-open-page-variant" title="YetiForce Doc"></span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" target="_blank" href="https://www.linkedin.com/groups/8177576"><span class="fab fa-linkedin"></span><span class="sr-only">Linkedin</span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" target="_blank" href="https://twitter.com/YetiForceEN"><span class="fab fa-twitter-square"></span><span class="sr-only">Twitter</span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" target="_blank" href="https://www.facebook.com/YetiForce-CRM-158646854306054/"><span class="fab fa-facebook-square"></span><span class="sr-only">Facebook</span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" target="_blank" href="https://github.com/YetiForceCompany/YetiForceCRM"><span class="fab fa-github-square"></span><span class="sr-only">Github</span></a></li><li class="yetiforceDetailsLink list-inline-item"><a rel="noreferrer noopener" target="_blank" href="https://github.com/YetiForceCompany/YetiForceCRM/issues"><span class="fas fa-bug"></span><span class="sr-only">Issues</span></a></li></ul></div></div></div><?php }?><!-- /tpl-install-tpl-InstallPreProcess -->
<?php }
}
