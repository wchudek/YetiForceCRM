<?php
/* Smarty version 4.3.1, created on 2023-07-10 10:00:09
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\install\tpl\StepInstall.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6a9e57d09_47197944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e80b6428734fc7e6b823c87f07fb6ed73c92b4a1' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\install\\tpl\\StepInstall.tpl',
      1 => 1688982687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6a9e57d09_47197944 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-install-tpl-StepInstall"><?php if ($_smarty_tpl->tpl_vars['INSTALLATION_SUCCESS']->value) {?><form name="step<?php echo $_smarty_tpl->tpl_vars['STEP_NUMBER']->value;?>
" method="post" action="../index.php?module=Users&action=Login"><input type="hidden" name="mode" value="install"><input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
"><input type="hidden" name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
"></form><?php echo '<script'; ?>
 type="text/javascript">
				window.localStorage.removeItem('yetiforce_install');
				jQuery(function() {
					/* Delay to let page load complete */
					setTimeout(function() {
						jQuery('form[name="step7"]').submit();
					}, 150);
				});
			<?php echo '</script'; ?>
><?php } else { ?><div class="container u-white-space-n u-word-break"><div class="card mx-auto mt-5 u-w-fit shadow" role="alert"><div class="card-header d-flex color-red-a200 bg-color-red-50 justify-content-center flex-wrap"><h3 class="align-items-center card-title d-flex justify-content-center"><?php echo \App\Language::translate('LBL_ERROR_INSTALL','Install');?>
</h3></div><div class="card-body text-success"><pre><?php echo \App\Log::getlastLogs(array('error'));?>
</pre></div></div></div><div class="form-button-nav fixed-bottom button-container p-1 bg-light"><div class="text-center w-100"><a class="btn btn-lg c-btn-block-xs-down btn-danger mr-sm-1 mb-1 mb-sm-0" href="Install.php" role="button"><span class="fas fa-lg fa-arrow-circle-left mr-2"></span><?php echo App\Language::translate('LBL_BACK','Install');?>
</a></div></div><?php echo '<script'; ?>
 type="text/javascript">
				$('#progressIndicator').remove();
			<?php echo '</script'; ?>
><?php }?></div>
<?php }
}
