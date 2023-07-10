<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:01:17
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Settings\YetiForce\Shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6ed155673_80128269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e9a4df91c45749e50c0d75735ad050b33cee5ac' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Settings\\YetiForce\\Shop.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6ed155673_80128269 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-YetiForce-Shop --><div class="tpl-Settings-YetiForce-Shop"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="mt-2 mx-n2 js-products-container"><?php if (!\App\YetiForce\Register::isRegistered()) {?><div class="col-md-12"><div class="alert alert-danger"><span class="yfi yfi-yeti-register-alert color-red-600 u-fs-5x mr-4 float-left"></span><h1 class="alert-heading"><?php echo \App\Language::translate('LBL_YETIFORCE_NOT_REGISTRATION_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h1><?php echo \App\Language::translate('LBL_YETIFORCE_NOT_REGISTRATION_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php } else {
if ($_smarty_tpl->tpl_vars['STATUS']->value) {?><div class="col-md-12"><?php if ('success' === $_smarty_tpl->tpl_vars['STATUS']->value) {?><div class="alert alert-success"><?php echo \App\Language::translate('LBL_SUCCESSFUL_TRANSACTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php } else { ?><div class="alert alert-danger"><?php echo \App\Language::translate('LBL_FAILED_TRANSACTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }?></div><?php }?><nav><div class="o-shop__nav nav nav-under mx-3" role="tablist"><a class="o-shop__nav__item nav-item nav-link <?php if ($_smarty_tpl->tpl_vars['TAB']->value === 'Premium') {?> active<?php }?>" id="nav-premium-tab" data-toggle="tab" href="#nav-premium" role="tab" aria-controls="nav-premium" aria-selected="<?php echo $_smarty_tpl->tpl_vars['TAB']->value === 'Premium';?>
"><span class="yfi yfi-for-admin"></span><?php echo \App\Language::translate('LBL_PREMIUM_ZONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><a class="o-shop__nav__item nav-item nav-link <?php if ($_smarty_tpl->tpl_vars['TAB']->value === 'Partner') {?> active<?php }?>" id="nav-partner-tab" data-toggle="tab" href="#nav-partner" role="tab" aria-controls="nav-partner" aria-selected="<?php echo $_smarty_tpl->tpl_vars['TAB']->value === 'Partner';?>
" data-js="data"><span class="yfi yfi-for-partners"></span><?php echo \App\Language::translate('LBL_PARTNER_ZONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><div class="js-popover-tooltip ml-sm-auto mr-2 d-inline mt-2" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_MARKETPLACE_YETIFORCE_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div><div class="c-mds-input input-group h-100 u-max-w-250px"><input type="text" class="js-shop-search form-control form-control-sm u-max-w-250px ml-2 u-outline-none" aria-label="<?php echo \App\Language::translate('LBL_SEARCH_PLACEHOLDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" placeholder="<?php echo \App\Language::translate('LBL_SEARCH_PLACEHOLDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" aria-describedby="<?php echo \App\Language::translate('LBL_SEARCH_PLACEHOLDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><div class="input-group-append pl-1 d-none d-xsm-flex align-items-center"><span class="fas fa-search fa-sm " id="<?php echo \App\Language::translate('LBL_SEARCH_PLACEHOLDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></div></div></div></nav><div class="tab-content justify-content-center"><div class="tab-pane fade js-nav-premium <?php if ($_smarty_tpl->tpl_vars['TAB']->value === 'Premium') {?> show active<?php }?>" id="nav-premium" role="tabpanel" aria-labelledby="nav-premium-tab" data-js="container"><div class="mt-2 mx-3"><ul class="nav nav-tabs" role="tablist"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\YetiForce\Shop::PRODUCT_CATEGORIES, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><li class="nav-item flex-sm-fill text-sm-center"><a class="nav-link js-select-category <?php if ($_smarty_tpl->tpl_vars['KEY']->value === $_smarty_tpl->tpl_vars['CATEGORY']->value) {?>active<?php }?>" role="button" data-toggle="tab" data-tab="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-js="click"><span class="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['icon'];?>
 mr-2"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><div class="d-flex flex-wrap mb-3 mx-3"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS_PREMIUM']->value, 'PRODUCT');
$_smarty_tpl->tpl_vars['PRODUCT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT']->value) {
$_smarty_tpl->tpl_vars['PRODUCT']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Shop/ProductPremium.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="tab-pane fade js-department<?php if ($_smarty_tpl->tpl_vars['TAB']->value === 'Partner') {?> show active<?php }?>" data-department="Partner" id="nav-partner" role="tabpanel" aria-labelledby="nav-partner-tab"><div class="d-flex flex-wrap mb-3 mx-3 justify-content-center"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS_PARTNER']->value, 'PRODUCT');
$_smarty_tpl->tpl_vars['PRODUCT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT']->value) {
$_smarty_tpl->tpl_vars['PRODUCT']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Shop/ProductPartner.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }?></div></div><!-- /tpl-Settings-YetiForce-Shop -->
<?php }
}
