<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 03:41:59
         compiled from "/home/xavi/public_html/shop/modules/cookielaw/cookielaw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4671146655473ec77d85f28-27319417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd12ac4522143d0b24c6f7f9a07a9c51aed8b13' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/cookielaw/cookielaw.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4671146655473ec77d85f28-27319417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cookielaw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473ec77dd9528_58177224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473ec77dd9528_58177224')) {function content_5473ec77dd9528_58177224($_smarty_tpl) {?><div id="cookielaw" class="cookielaw">
<div class="container">
<a id="cookie_close" class="button btn btn-default button-small" href="#"><span><?php echo smartyTranslate(array('s'=>'Accept','mod'=>'cookielaw'),$_smarty_tpl);?>
</span></a>
<?php echo $_smarty_tpl->tpl_vars['cookielaw']->value->body_paragraph;?>

    </div>
</div><?php }} ?>
