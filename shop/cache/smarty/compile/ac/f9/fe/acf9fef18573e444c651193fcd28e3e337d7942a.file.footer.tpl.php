<?php /* Smarty version Smarty-3.1.19, created on 2014-10-30 22:01:28
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\fblogin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114945452a728954080-55234672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf9fef18573e444c651193fcd28e3e337d7942a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\fblogin\\footer.tpl',
      1 => 1414700197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114945452a728954080-55234672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fb_psver' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5452a728967906_51743290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5452a728967906_51743290')) {function content_5452a728967906_51743290($_smarty_tpl) {?><div class="fbloader"></div>
<?php if ($_smarty_tpl->tpl_vars['fb_psver']->value==4) {?>
    <script>
        var baseUri = baseDir;
    </script>
<?php }?><?php }} ?>
