<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 18:11:22
         compiled from "/home/xavi/public_html/shop/modules/fblogin/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:379075156543aa82a9d3339-04979484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '809ed3a112f9463498f1c5a1ac23f50d881ee227' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/fblogin/top.tpl',
      1 => 1410983532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '379075156543aa82a9d3339-04979484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543aa82aa363c5_86828360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543aa82aa363c5_86828360')) {function content_543aa82aa363c5_86828360($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
<div class="fblogin"><p onclick="fblogin_mypresta();"><span><?php echo smartyTranslate(array('s'=>'Log in with facebook','mod'=>'fblogin'),$_smarty_tpl);?>
</span></p></div>
<?php }?><?php }} ?>
