<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 20:42:41
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\blockfooterhtml\blockfooterhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302255453e6313075c0-63842843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02be61556423706a7c14a612503a4022c2628e60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\blockfooterhtml\\blockfooterhtml.tpl',
      1 => 1414700194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302255453e6313075c0-63842843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerhtml_val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453e6313557d1_93465392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453e6313557d1_93465392')) {function content_5453e6313557d1_93465392($_smarty_tpl) {?>

<!-- MODULE Block contact infos -->
<?php if (isset($_smarty_tpl->tpl_vars['footerhtml_val']->value)&&$_smarty_tpl->tpl_vars['footerhtml_val']->value) {?>
<section id="block_footer_html" class="footer-block col-xs-12 col-sm-3">
<?php echo $_smarty_tpl->tpl_vars['footerhtml_val']->value;?>

</section>
	<?php }?>
<!-- /MODULE Block contact infos -->
<?php }} ?>
