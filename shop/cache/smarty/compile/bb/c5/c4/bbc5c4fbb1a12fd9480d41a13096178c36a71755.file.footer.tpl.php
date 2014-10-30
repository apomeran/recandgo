<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:02:56
         compiled from "/home/xavi/public_html/shop/modules/fblogin/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68374272543784a0ef7db1-25213335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc5c4fbb1a12fd9480d41a13096178c36a71755' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/fblogin/footer.tpl',
      1 => 1410983532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68374272543784a0ef7db1-25213335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fb_psver' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543784a0efc833_04368757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543784a0efc833_04368757')) {function content_543784a0efc833_04368757($_smarty_tpl) {?><div class="fbloader"></div>
<?php if ($_smarty_tpl->tpl_vars['fb_psver']->value==4) {?>
    <script>
        var baseUri = baseDir;
    </script>
<?php }?><?php }} ?>
