<?php
/* Smarty version 4.3.1, created on 2023-07-10 09:56:30
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\install\tpl\StepChooseHost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd5ce83aad4_30112986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82838fce2919674ad0a4dabc4431c006998cd680' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\install\\tpl\\StepChooseHost.tpl',
      1 => 1688982687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd5ce83aad4_30112986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'SHOW_HOSTING_TITLE' => 
  array (
    'compiled_filepath' => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\cache\\templates_c\\82838fce2919674ad0a4dabc4431c006998cd680_0.file.StepChooseHost.tpl.php',
    'uid' => '82838fce2919674ad0a4dabc4431c006998cd680',
    'call_name' => 'smarty_template_function_SHOW_HOSTING_TITLE_27712776464abd5ce7d7ee5_39393812',
  ),
  'SHOW_HOSTING_BODY' => 
  array (
    'compiled_filepath' => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\cache\\templates_c\\82838fce2919674ad0a4dabc4431c006998cd680_0.file.StepChooseHost.tpl.php',
    'uid' => '82838fce2919674ad0a4dabc4431c006998cd680',
    'call_name' => 'smarty_template_function_SHOW_HOSTING_BODY_27712776464abd5ce7d7ee5_39393812',
  ),
));
?><!-- tpl-install-tpl-StepChooseHost --><?php $_smarty_tpl->_assignInScope('COL_CLASS', 'col-12 col-lg-4 text-white p-1 p-lg-2 p-xl-3 pt-xl-2 d-flex flex-column');
$_smarty_tpl->_assignInScope('BTN_CLASS', 'btn btn-lg c-btn-block-xs-down btn-outline-light mt-auto');?><div class="w-100 js-products-container"><main class="main-container mx-lg-3"><div class="inner-container"><div class="row"><div class="col-12 text-center"><h3><?php echo App\Language::translate('LBL_CHOOSE_INSTALLATION_TYPE','Install');?>
</h3></div><hr class="w-100"></div><div class="row"><form name="step-stepChooseHost" method="post" action="Install.php" class="<?php echo $_smarty_tpl->tpl_vars['COL_CLASS']->value;?>
 o-product o-product--own"><input type="hidden" name="mode" value="step3"><input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HOSTING_TITLE', array('TYPE'=>'SELF'), true);?>
<div class="py-4 w-100 text-center"><div class="pb-3"><img class="o-buy-modal__img u-img-invert" src="../<?php echo \App\Layout::getPublicUrl('install/tpl/resources/images/own_hosting.png');?>
" alt="<?php echo App\Language::translate('LBL_MY_SERVER_TITLE','Install');?>
" title="<?php echo App\Language::translate('LBL_MY_SERVER_TITLE','Install');?>
" /></div><h5 class="u-font-weight-300"><?php echo App\Language::translate('LBL_MY_SERVER_TITLE','Install');?>
</h5><hr class="w-50 mx-auto"><p><?php echo App\Language::translate('LBL_MY_SERVER_DESC','Install');?>
</p></div><button type="submit" class="<?php echo $_smarty_tpl->tpl_vars['BTN_CLASS']->value;?>
 js-submit"><span class="fas fa-lg fa-arrow-circle-right mr-2"></span><?php echo App\Language::translate('LBL_INSTALL_YOURSELF','Install');?>
</button></form><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CLASS']->value;?>
 o-product o-product--shared"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HOSTING_TITLE', array('TYPE'=>'SHARED'), true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HOSTING_BODY', array('PRODUCT'=>$_smarty_tpl->tpl_vars['PRODUCT_SHARED']->value), true);?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CLASS']->value;?>
 o-product o-product--cloud"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HOSTING_TITLE', array('TYPE'=>'CLOUD'), true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_HOSTING_BODY', array('PRODUCT'=>$_smarty_tpl->tpl_vars['PRODUCT_ClOUD']->value), true);?>
</div></div><div class="form-button-nav fixed-bottom button-container p-1 bg-light"><div class="text-center w-100"><a class="btn btn-lg c-btn-block-xs-down btn-danger mr-sm-1 mb-1 mb-sm-0" href="Install.php?mode=step2" role="button"><span class="fas fa-lg fa-arrow-circle-left mr-2"></span><?php echo App\Language::translate('LBL_BACK','Install');?>
</a></div></div></div></main></div><!-- /tpl-install-tpl-StepChooseHost -->
<?php }
/* smarty_template_function_SHOW_HOSTING_TITLE_27712776464abd5ce7d7ee5_39393812 */
if (!function_exists('smarty_template_function_SHOW_HOSTING_TITLE_27712776464abd5ce7d7ee5_39393812')) {
function smarty_template_function_SHOW_HOSTING_TITLE_27712776464abd5ce7d7ee5_39393812(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('TYPE'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>
<h4 class="w-100 text-center u-font-weight-350"><?php echo \App\Language::translate(('LBL_HOSTING_').($_smarty_tpl->tpl_vars['TYPE']->value),'Install');?>
</h4><?php
}}
/*/ smarty_template_function_SHOW_HOSTING_TITLE_27712776464abd5ce7d7ee5_39393812 */
/* smarty_template_function_SHOW_HOSTING_BODY_27712776464abd5ce7d7ee5_39393812 */
if (!function_exists('smarty_template_function_SHOW_HOSTING_BODY_27712776464abd5ce7d7ee5_39393812')) {
function smarty_template_function_SHOW_HOSTING_BODY_27712776464abd5ce7d7ee5_39393812(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('PRODUCT'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>
<div class="py-4 w-100 text-center"><div class="pb-3"><img class="o-buy-modal__img u-img-invert" src="../<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getImage();?>
" alt="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PRODUCT']->value->getLabel());?>
" title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PRODUCT']->value->getLabel());?>
" /></div><h5 class="u-font-weight-300"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getLabel();?>
</h5><hr class="w-50 mx-auto"><p><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getDescription();?>
</p><!--<button type="button" class="btn btn-outline-light js-product-modal my-2" data-product=<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getName();?>
><span class="fas fa-info-circle mr-2"></span><?php echo App\Language::translate('LBL_SHOW_MORE','Install');?>
</button>--></div><button type="button" class="<?php echo $_smarty_tpl->tpl_vars['BTN_CLASS']->value;?>
 js-buy-modal" data-product=<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value->getName();?>
><span class="yfi-shop mr-2"></span><?php echo App\Language::translate('LBL_BUY','Install');?>
</button><?php
}}
/*/ smarty_template_function_SHOW_HOSTING_BODY_27712776464abd5ce7d7ee5_39393812 */
}
