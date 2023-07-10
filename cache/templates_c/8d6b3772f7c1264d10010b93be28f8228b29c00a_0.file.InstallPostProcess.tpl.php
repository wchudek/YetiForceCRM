<?php
/* Smarty version 4.3.1, created on 2023-07-10 09:56:21
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\install\tpl\InstallPostProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd5c5209f08_79255446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d6b3772f7c1264d10010b93be28f8228b29c00a' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\install\\tpl\\InstallPostProcess.tpl',
      1 => 1688982687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:JSResources.tpl' => 1,
  ),
),false)) {
function content_64abd5c5209f08_79255446 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-install-tpl-InstallPostProcess --><br><footer class="noprint text-center fixed-bottom c-footer"><p class="text-center text-center <?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>u-p-05per<?php }?>"><span class="d-none d-sm-inline ">Copyright &copy; YetiForce.com All rights reserved.<br /><?php echo \App\Language::translateArgs('LBL_FOOTER_CONTENT','Vtiger','open source project');?>
</span><span class="d-inline d-sm-none text-center">&copy; YetiForce.com All rights reserved.</span></p></footer><?php $_smarty_tpl->_subTemplateRender('file:JSResources.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></body></html><!-- /tpl-install-tpl-InstallPostProcess -->
<?php }
}
