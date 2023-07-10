<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:01:26
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Settings\ModuleManager\ListContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6f64403c0_81157919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c0901ca6aaec43efea8991c6b95d80b15766bf1' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Settings\\ModuleManager\\ListContents.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6f64403c0_81157919 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-ModuleManager-ListContents --><div id="moduleManagerContents"><div class="o-breadcrumb widget_header row mb-2"><div class="col-md-7 d-flex align-items-center"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col-md-5"><span class="btn-toolbar float-lg-right mt-1"><span class="btn-group mr-sm-0 mr-lg-1 c-btn-block-md-down"><button class="btn btn-success createModule c-btn-block-md-down" type="button"><span class="fas fa-desktop"></span>&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_CREATE_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><?php if (\App\Config::main('systemMode') !== 'demo') {?><span class="btn-group c-btn-block-md-down mt-1 mt-lg-0"><button class="btn btn-primary c-btn-block-md-down" type="button" onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['IMPORT_USER_MODULE_URL']->value;?>
"'><span class="fas fa-download"></span>&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_IMPORT_ZIP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><?php }?></span></div></div><div class="contents"><div class="js-scrollbar position-relative" data-js="container"><table class="table table-bordered table-with-flex table-sm position-relative"><thead><tr class="blockHeader"><th><span><?php echo \App\Language::translate('LBL_LIBRARY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th><span><?php echo \App\Language::translate('LBL_LIBRARY_DIR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th><span><?php echo \App\Language::translate('LBL_LIBRARY_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th><span><?php echo \App\Language::translate('LBL_LIBRARY_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th><span><?php echo \App\Language::translate('LBL_LIBRARY_ACTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_ModuleManager_Library_Model::getAll(), 'LIBRARY', false, 'NAME');
$_smarty_tpl->tpl_vars['LIBRARY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['LIBRARY']->value) {
$_smarty_tpl->tpl_vars['LIBRARY']->do_else = false;
?><tr><td><strong><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</strong></td><td class="text-nowrap"><?php echo $_smarty_tpl->tpl_vars['LIBRARY']->value['dir'];?>
</td><td class="text-nowrap"><a href="<?php echo $_smarty_tpl->tpl_vars['LIBRARY']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['LIBRARY']->value['url'];?>
</a></td><td><?php if ($_smarty_tpl->tpl_vars['LIBRARY']->value['status'] == 1) {?><span class="badge badge-success bigLabel"><?php echo \App\Language::translate('LBL_LIBRARY_DOWNLOADED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="far fa-check-circle ml-1"></span></span><?php } elseif ($_smarty_tpl->tpl_vars['LIBRARY']->value['status'] == 2) {?><span class="badge badge-warning bigLabel"><?php echo \App\Language::translate('LBL_LIBRARY_NEEDS_UPDATING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="fas fa-info-circle ml-1"></span></span><?php } else { ?><span class="badge badge-danger bigLabel"><?php echo \App\Language::translate('LBL_LIBRARY_NO_DOWNLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="fas fa-ban ml-1"></span></span><?php }?></td><td class="d-flex align-items-center justify-content-center p-2"><span class="btn-group"><?php if ($_smarty_tpl->tpl_vars['LIBRARY']->value['status'] === 0) {?><form method="POST" action="index.php?module=ModuleManager&parent=Settings&action=Library&mode=download&name=<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><button type="submit" class="btn btn-primary btn-sm"><span class="fas fa-download mr-1"></span><strong><?php echo \App\Language::translate('BTN_LIBRARY_DOWNLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></form><?php } else { ?><form method="POST" action="index.php?module=ModuleManager&parent=Settings&action=Library&mode=update&name=<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><button type="submit" class="btn btn-primary btn-sm"><span class="fas fa-redo-alt mr-1"></span><strong><?php echo \App\Language::translate('BTN_LIBRARY_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></form><?php }?></span></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><br /><table class="table table-bordered table-with-flex table-sm"><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULES']->value, 'MODULE_MODEL', false, 'MODULE_ID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('ITEM_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));
$_smarty_tpl->_assignInScope('MODULE_ACTIVE', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isActive());?></tr><tr class="c-module-table-row col-sm-12 col-lg-6 col-xl-4 float-left p-0"><td class="d-flex w-100 align-items-center flex-nowrap"><div class="mx-md-2 u-h-fit"><input type="checkbox" value="" name="moduleStatus" aria-label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM_NAME']->value,$_smarty_tpl->tpl_vars['ITEM_NAME']->value);?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['ITEM_NAME']->value;?>
" data-module-translation="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM_NAME']->value,$_smarty_tpl->tpl_vars['ITEM_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isActive()) {?>checked<?php }?> /></div><div class="text-center text-md-left p-1 <?php if (!$_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value) {?>dull <?php }?>"><span class="fa-2x yfm-<?php echo $_smarty_tpl->tpl_vars['ITEM_NAME']->value;?>
"></span></div><div class="text-center u-ellipsis-in-flex text-md-left p-1 <?php if (!$_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value) {?>dull <?php }?>"><h5 class="m-0 u-text-ellipsis--no-hover text-left u-font-weight-450" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM_NAME']->value,$_smarty_tpl->tpl_vars['ITEM_NAME']->value);?>
"></h5><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM_NAME']->value,$_smarty_tpl->tpl_vars['ITEM_NAME']->value);?>
</h5></div><div class="d-flex flex-row align-items-center ml-auto mr-md-1"><?php if (!empty($_smarty_tpl->tpl_vars['ICONS']->value[$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('premium')])) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICONS']->value[$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('premium')];?>
 js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_PREMIUM_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span><?php }
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isExportable()) {?><form class="" method="POST" action="index.php?module=ModuleManager&parent=Settings&action=ModuleExport&mode=exportModule&forModule=<?php echo $_smarty_tpl->tpl_vars['ITEM_NAME']->value;?>
"><button type="submit" class="btn btn-primary btn-sm ml-0 ml-md-2 js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_EXPORT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="far fa-arrow-alt-circle-down"></i></button></form><?php }
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('customized')) {?><button type="button" aria-label="<?php echo \App\Language::translate('LBL_DELETE_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="deleteModule btn btn-danger btn-sm ml-1 ml-md-2 js-popover-tooltip" name="<?php echo $_smarty_tpl->tpl_vars['ITEM_NAME']->value;?>
" data-content="<?php echo \App\Language::translate('LBL_DELETE_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-trash-alt"></span></button><?php }
$_smarty_tpl->_assignInScope('SETTINGS_LINKS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getSettingLinks());
if (!in_array($_smarty_tpl->tpl_vars['ITEM_NAME']->value,$_smarty_tpl->tpl_vars['RESTRICTED_MODULES_LIST']->value) && (count($_smarty_tpl->tpl_vars['SETTINGS_LINKS']->value) > 0)) {?><div class="btn-group-sm d-flex justify-content-end ml-1 ml-md-2 u-remove-dropdown-icon <?php if (!$_smarty_tpl->tpl_vars['MODULE_ACTIVE']->value) {?>d-none<?php }?>" role="group"><button class="btn dropdown-toggle btn-outline-secondary js-popover-tooltip" aria-label="<?php echo \App\Language::translate('LBL_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-toggle="dropdown" data-content="<?php echo \App\Language::translate('LBL_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><strong><span class="fas fa-cog"></span></strong></button><div class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SETTINGS_LINKS']->value, 'SETTINGS_LINK');
$_smarty_tpl->tpl_vars['SETTINGS_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value) {
$_smarty_tpl->tpl_vars['SETTINGS_LINK']->do_else = false;
?><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value['linkurl'];?>
"><span class="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value['linkicon'];?>
 mr-2"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SETTINGS_LINK']->value['linklabel'],$_smarty_tpl->tpl_vars['ITEM_NAME']->value);?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></table></div></div><!-- /tpl-Settings-ModuleManager-ListContents -->
<?php }
}
