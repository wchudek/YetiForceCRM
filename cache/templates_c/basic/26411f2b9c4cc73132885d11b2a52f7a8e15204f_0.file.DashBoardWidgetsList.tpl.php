<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:00:14
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\dashboards\DashBoardWidgetsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd6ae442904_60032285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26411f2b9c4cc73132885d11b2a52f7a8e15204f' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\dashboards\\DashBoardWidgetsList.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd6ae442904_60032285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<!-- tpl-dashboards-DashBoardWidgetsList --><button class="js-widget-predefined btn btn-outline-dark c-btn-block-xs-down addButton dropdown-toggle u-remove-dropdown-icon <?php if (!smarty_modifier_count($_smarty_tpl->tpl_vars['WIDGETS']->value) > 0) {?>d-none<?php }?>" data-toggle="dropdown" data-js="class: d-none"><span class="c-icon--tripple"><span class="c-icon--tripple__top fas fa-chart-pie"></span><span class="c-icon--tripple__left fas fa-chart-line"></span><span class="c-icon--tripple__right fas fa-chart-area"></span></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_PREDEFINED_WIDGETS','Dashboard');?>
</span></button><div class="js-widget-list dropdown-menu widgetsList addWidgetDropDown" data-js="container"><?php $_smarty_tpl->_assignInScope('WIDGET', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET');
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
?><a class="js-widget-list__item dropdown-item d-flex" href="#" data-name="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value->getName());?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid');?>
"data-widget-url="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['WIDGET']->value->getUrl(), ENT_QUOTES, 'UTF-8', true);?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
"data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
" data-js="remove | click"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value,null,true,'Dashboard');
if ($_smarty_tpl->tpl_vars['WIDGET']->value->isDeletable()) {?><span class="text-danger pl-5 ml-auto"><span class="fas fa-trash-alt removeWidgetFromList u-hover-opacity" data-widget-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid');?>
" data-js="click"></span></span><?php }?></a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- /tpl-dashboards-DashBoardWidgetsList -->
<?php }
}
