<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:02:56
         compiled from "/home/xavi/public_html/shop/modules/blockfooterhtml/blockfooterhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1039953125543784a0eca192-38488658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1039953125543784a0eca192-38488658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerhtml_val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543784a0edcc33_25943665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543784a0edcc33_25943665')) {function content_543784a0edcc33_25943665($_smarty_tpl) {?>

<!-- MODULE Block contact infos -->
<?php if (isset($_smarty_tpl->tpl_vars['footerhtml_val']->value)&&$_smarty_tpl->tpl_vars['footerhtml_val']->value) {?>
<section id="block_footer_html" class="footer-block col-xs-12 col-sm-3">
<?php echo $_smarty_tpl->tpl_vars['footerhtml_val']->value;?>

</section>
	<?php }?>
<!-- /MODULE Block contact infos -->
<?php }} ?>
