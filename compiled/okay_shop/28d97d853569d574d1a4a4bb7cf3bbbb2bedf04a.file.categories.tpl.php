<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-29 21:42:11
         compiled from "C:\OSPanel\domains\okay-test\design\okay_shop\html\categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206465b86e9036da6c8-52264932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28d97d853569d574d1a4a4bb7cf3bbbb2bedf04a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\okay-test\\design\\okay_shop\\html\\categories.tpl',
      1 => 1535567553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206465b86e9036da6c8-52264932',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'categories' => 0,
    'level' => 0,
    'c' => 0,
    'category' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b86e9036ff2d4_89752401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b86e9036ff2d4_89752401')) {function content_5b86e9036ff2d4_89752401($_smarty_tpl) {?><nav class="categories_nav">
    <?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
            <ul class="level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?>categories_menu <?php } else { ?>subcategory <?php }?>">
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories&&$_smarty_tpl->tpl_vars['c']->value->has_children_visible) {?>
                            <li class="category_item has_child">
                                <a class="category_link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <i class="arrow_right tablet-hidden"><?php echo $_smarty_tpl->getSubTemplate ('svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'arrow_right'), 0);?>
</i>
                                </a>
                                <i class="fn_switch cat_switch lg-hidden"></i>
                                <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                            </li>
                        <?php } else { ?>
                            <li class="category_item">
                                <a class="category_link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </li>
                        <?php }?>
                    <?php }?>
                <?php } ?>
            </ul>
        <?php }?>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

    <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1));?>

</nav><?php }} ?>
