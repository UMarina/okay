<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-29 22:27:20
         compiled from "C:\OSPanel\domains\okay-test\design\okay_shop\html\page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325005b86f398da3501-01621329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c541c99713de2265d1f1162079c3d2826515058' => 
    array (
      0 => 'C:\\OSPanel\\domains\\okay-test\\design\\okay_shop\\html\\page_404.tpl',
      1 => 1535567553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325005b86f398da3501-01621329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'lang' => 0,
    'menu_404' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b86f398daa005_97829366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b86f398daa005_97829366')) {function content_5b86f398daa005_97829366($_smarty_tpl) {?>





<div class="block padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

            </div>
            <div class="col-sm-12 col-md-7">
                <div class="menu_404">
                    <div class="text_404">
                        <span data-language="page404_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->page404_text;?>
</span>
                    </div>
                    
                    <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
