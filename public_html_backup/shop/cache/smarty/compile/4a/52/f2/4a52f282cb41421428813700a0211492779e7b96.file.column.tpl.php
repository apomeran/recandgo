<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 16:42:01
         compiled from "/home/xavi/public_html/shop/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1444020666545650c95395f1-30120308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a52f282cb41421428813700a0211492779e7b96' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/paypal/views/templates/hook/column.tpl',
      1 => 1411010868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1444020666545650c95395f1-30120308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545650c95401c9_55745985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545650c95401c9_55745985')) {function content_545650c95401c9_55745985($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>
