<?php
/* Smarty version 4.3.1, created on 2023-07-10 11:13:27
  from 'C:\xampp8019\htdocs\projekty\YetiForceCRM\layouts\basic\modules\Vtiger\Detail\HeaderProgress.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64abd9c7752314_87013845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd71d6f1ad7b5712a19a9d5a77585f618ad830e9' => 
    array (
      0 => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Detail\\HeaderProgress.tpl',
      1 => 1688982688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64abd9c7752314_87013845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'SHOW_PROGRESS_HEADER' => 
  array (
    'compiled_filepath' => 'C:\\xampp8019\\htdocs\\projekty\\YetiForceCRM\\cache\\templates_c\\basic\\fd71d6f1ad7b5712a19a9d5a77585f618ad830e9_0.file.HeaderProgress.tpl.php',
    'uid' => 'fd71d6f1ad7b5712a19a9d5a77585f618ad830e9',
    'call_name' => 'smarty_template_function_SHOW_PROGRESS_HEADER_131647092464abd9c771dc28_87382854',
  ),
));
?><!-- tpl-Base-Detail-HeaderProgress --><?php if ((isset($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['progress']))) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_PROGRESS_HEADER', array('PROGRESS_HEADER'=>$_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['progress'],'TYPE'=>'PROGRESS'), true);
}
if ((isset($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['selectionBar']))) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SHOW_PROGRESS_HEADER', array('PROGRESS_HEADER'=>$_smarty_tpl->tpl_vars['FIELDS_HEADER']->value['selectionBar'],'TYPE'=>'SELECTION_BAR'), true);
}?><!-- /tpl-Base-Detail-HeaderProgress -->
<?php }
/* smarty_template_function_SHOW_PROGRESS_HEADER_131647092464abd9c771dc28_87382854 */
if (!function_exists('smarty_template_function_SHOW_PROGRESS_HEADER_131647092464abd9c771dc28_87382854')) {
function smarty_template_function_SHOW_PROGRESS_HEADER_131647092464abd9c771dc28_87382854(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('PROGRESS_HEADER'=>'','TYPE'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if ((isset($_smarty_tpl->tpl_vars['PROGRESS_HEADER']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROGRESS_HEADER']->value, 'FIELD_MODEL', false, 'NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (!$_smarty_tpl->tpl_vars['RECORD']->value->isEmpty($_smarty_tpl->tpl_vars['NAME']->value)) {?><div class="c-progress px-3 w-100"><ul class="c-progress__container js-header-progress-bar list-inline my-0 py-1 js-scrollbar c-scrollbar-x--small" data-picklist-name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"data-js="container"><?php $_smarty_tpl->_assignInScope('ARROW_CLASS', "before");
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getProgressHeader($_smarty_tpl->tpl_vars['RECORD']->value), 'PROGRESS_HEADER_VALUE', false, 'PROGRESS_HEADER_KEY', 'progressHeaderValue', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PROGRESS_HEADER_KEY']->value => $_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value) {
$_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['index'];
if ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isLocked']) {
$_smarty_tpl->_assignInScope('ICON_CLASS', "fas fa-lock");
} elseif ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isActive'] && $_smarty_tpl->tpl_vars['TYPE']->value == 'PROGRESS') {
$_smarty_tpl->_assignInScope('ICON_CLASS', "far fa-dot-circle");
} elseif ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isActive'] && $_smarty_tpl->tpl_vars['TYPE']->value == 'SELECTION_BAR') {
$_smarty_tpl->_assignInScope('ICON_CLASS', "fas fa-check");
} else {
if ($_smarty_tpl->tpl_vars['TYPE']->value == 'PROGRESS' && $_smarty_tpl->tpl_vars['ARROW_CLASS']->value == 'before') {
$_smarty_tpl->_assignInScope('ICON_CLASS', "fas fa-check");
} else {
$_smarty_tpl->_assignInScope('ICON_CLASS', "c-progress__icon__dot");
}
}?><li class="c-progress__item <?php if ($_smarty_tpl->tpl_vars['TYPE']->value == 'SELECTION_BAR') {?>c-progress__item--select<?php }?> list-inline-item mx-0 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_progressHeaderValue']->value['first'] : null)) {?>first<?php }?> <?php if ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isActive']) {?>active<?php $_smarty_tpl->_assignInScope('ARROW_CLASS', "after");
} else {
echo $_smarty_tpl->tpl_vars['ARROW_CLASS']->value;
}
if ($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['isEditable'] && $_smarty_tpl->tpl_vars['PROGRESS_HEADER_KEY']->value !== $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME']->value)) {?> u-cursor-pointer js-access<?php }?>" data-picklist-value="<?php echo $_smarty_tpl->tpl_vars['PROGRESS_HEADER_KEY']->value;?>
" data-picklist-label="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['label']);?>
" data-js="confirm|click|data"><div class="c-progress__icon__container"><span class="<?php echo $_smarty_tpl->tpl_vars['ICON_CLASS']->value;
echo ' ';?>
c-progress__icon"></span></div><div class="c-progress__link"><?php if (!empty($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['description'])) {?><span class="c-progress__icon-info js-popover-tooltip" data-js="popover" data-trigger="hover focus" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['description']);?>
"><span class="fas fa-info-circle"></span></span><?php }?><span class=" js-popover-tooltip--ellipsis" data-toggle="popover" data-content="<?php echo $_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['label'];?>
" data-js="popover"><span class="c-progress__text"><?php echo $_smarty_tpl->tpl_vars['PROGRESS_HEADER_VALUE']->value['label'];?>
</span></span></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}}
/*/ smarty_template_function_SHOW_PROGRESS_HEADER_131647092464abd9c771dc28_87382854 */
}
