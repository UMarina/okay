<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-30 20:20:31
         compiled from "C:\OSPanel\domains\okay-test\design\okay_shop\html\products_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114175b88275f633f72-23444639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f2dbd2b6259bc0a63ca1eb198a330801c85964' => 
    array (
      0 => 'C:\\OSPanel\\domains\\okay-test\\design\\okay_shop\\html\\products_content.tpl',
      1 => 1535567553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114175b88275f633f72-23444639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b88275f63aef9_91622243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b88275f63aef9_91622243')) {function content_5b88275f63aef9_91622243($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <div class="no_padding products_item col-sm-6 col-xl-4">
            <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php } ?>
<?php } else { ?>
    <span data-language="products_not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_not_found;?>
</span>
<?php }?><?php }} ?>
