<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 03:41:59
         compiled from "/home/xavi/public_html/shop/modules/fblogin/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12631196445473ec77673376-05250485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '12631196445473ec77673376-05250485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fb_psver' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473ec776ac1a0_81721440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473ec776ac1a0_81721440')) {function content_5473ec776ac1a0_81721440($_smarty_tpl) {?><div class="fbloader"></div>
<?php if ($_smarty_tpl->tpl_vars['fb_psver']->value==4) {?>
    <script>
        var baseUri = baseDir;
    </script>
<?php }?><?php }} ?>
