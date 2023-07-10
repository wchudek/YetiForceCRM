<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:00:14
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\dashboards\DashBoardButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6ae257281_26398109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de1cb198343f3d885ff164daf54937c8711fabea' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\dashboards\\DashBoardButtons.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6ae257281_26398109 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-dashboards-DashBoardButtons --><div class="dashboardHeading d-flex ml-auto mb-2 mt-sm-2 pr-sm-1 u-remove-dropdown-icon-down-lg u-w-xs-down-100"><input type="hidden" name="selectedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php $_smarty_tpl->_assignInScope('SPECIAL_WIDGETS', Settings_WidgetsManagement_Module_Model::getSpecialWidgets($_smarty_tpl->tpl_vars['MODULE_NAME']->value));
if ($_smarty_tpl->tpl_vars['MODULE_PERMISSION']->value) {?><div class="js-predefined-widgets" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardWidgetsList.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }
if ((isset($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Mini List'])) && $_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'CreateDashboardFilter')) {?><button class="btn btn-outline-dark js-add-filter ml-1 js-popover-tooltip" title="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_ADD_FILTER','Dashboard'));?>
" data-content="<?php echo \App\Language::translate('LBL_ADD_FILTER_DESC','Dashboard');?>
"data-linkid="<?php echo $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Mini List']->get('linkid');?>
" data-block-id="0" data-width="4" data-height="4" data-js="click|popover"><span class="fas fa-filter"></span><span class="d-none d-xxl-inline ml-2"><?php echo \App\Language::translate('LBL_ADD_FILTER','Dashboard');?>
</span></button><?php }
if ((isset($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter'])) && $_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'CreateDashboardChartFilter')) {?><button class="btn btn-outline-dark js-show-modal ml-1 js-popover-tooltip" title="<?php echo \App\Language::translate('LBL_ADD_CHART_FILTER','Dashboard');?>
" data-content="<?php echo \App\Language::translate('LBL_ADD_CHART_FILTER_DESC','Dashboard');?>
"data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
&view=ChartFilter&step=step1&linkId=<?php echo $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter']->get('linkid');?>
"data-linkid="<?php echo $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter']->get('linkid');?>
"data-width="4" data-height="4" data-block-id="0" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"data-modalId="<?php echo \App\Layout::getUniqueId('ChartFilter');?>
" data-content="5555" data-js="click|popover"><span class="fas fa-chart-pie"></span><span class="d-none d-xxl-inline ml-2"><?php echo \App\Language::translate('LBL_ADD_CHART_FILTER','Dashboard');?>
</span></button><?php }?><a class="btn btn-outline-dark ml-1 js-popover-tooltip js-post-action" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
&action=Widget&mode=clear" title="<?php echo \App\Language::translate('LBL_CLEAR_DEVICE_CONF','Dashboard');?>
" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_CLEAR_DEVICE_CONF_DESC','Dashboard'));?>
" data-js="popover"><span class="fas fa-broom fa-fw"></span></a></div><!-- /tpl-dashboards-DashBoardButtons -->
<?php }
}
