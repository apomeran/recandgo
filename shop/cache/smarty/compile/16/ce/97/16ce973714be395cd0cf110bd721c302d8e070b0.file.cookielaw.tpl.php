<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 20:42:41
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\cookielaw\cookielaw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76525453e6317be754-32488325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ce973714be395cd0cf110bd721c302d8e070b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\cookielaw\\cookielaw.tpl',
      1 => 1414700197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76525453e6317be754-32488325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cookielaw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453e6317d9ce4_78021453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453e6317d9ce4_78021453')) {function content_5453e6317d9ce4_78021453($_smarty_tpl) {?><div id="cookielaw" class="cookielaw">
<div class="container">
<a id="cookie_close" class="button btn btn-default button-small" href="#"><span><?php echo smartyTranslate(array('s'=>'Accept','mod'=>'cookielaw'),$_smarty_tpl);?>
</span></a>
<?php echo $_smarty_tpl->tpl_vars['cookielaw']->value->body_paragraph;?>

    </div>
</div><?php }} ?>
