<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 03:41:59
         compiled from "/home/xavi/public_html/shop/modules/blockfooterhtml/blockfooterhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1942567685473ec774455e7-68316864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bb4a5597dd516d480ef2c3934e68adb6db8b37d' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/blockfooterhtml/blockfooterhtml.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942567685473ec774455e7-68316864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerhtml_val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473ec77464949_06614974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473ec77464949_06614974')) {function content_5473ec77464949_06614974($_smarty_tpl) {?>

<!-- MODULE Block contact infos -->
<?php if (isset($_smarty_tpl->tpl_vars['footerhtml_val']->value)&&$_smarty_tpl->tpl_vars['footerhtml_val']->value) {?>
<section id="block_footer_html" class="footer-block col-xs-12 col-sm-3">
<?php echo $_smarty_tpl->tpl_vars['footerhtml_val']->value;?>

</section>
	<?php }?>
<!-- /MODULE Block contact infos -->
<?php }} ?>
