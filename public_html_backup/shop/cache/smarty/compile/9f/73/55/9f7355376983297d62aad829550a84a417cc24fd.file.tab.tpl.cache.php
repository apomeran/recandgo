<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 21:47:40
         compiled from "/home/xavi/public_html/shop/modules/additionalproductstabs/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1920371196543837dc784af2-60653060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7355376983297d62aad829550a84a417cc24fd' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/additionalproductstabs/views/templates/hook/tab.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1920371196543837dc784af2-60653060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543837dc78adf9_57087024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543837dc78adf9_57087024')) {function content_543837dc78adf9_57087024($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabName']->value)) {?>
<li><a href="#additionalTab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tabName']->value;?>
</a></li>
<?php }?><?php }} ?>
