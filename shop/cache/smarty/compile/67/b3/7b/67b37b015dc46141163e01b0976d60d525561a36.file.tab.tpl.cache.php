<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 21:47:40
         compiled from "/home/xavi/public_html/shop/modules/videostab/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1144020089543837dc75c785-44880317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b37b015dc46141163e01b0976d60d525561a36' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/videostab/views/templates/hook/tab.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144020089543837dc75c785-44880317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videosNb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543837dc779d97_53203641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543837dc779d97_53203641')) {function content_543837dc779d97_53203641($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['videosNb']->value>0) {?>
<li><a href="#videosTab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Videos','mod'=>'videostab'),$_smarty_tpl);?>
(<?php echo $_smarty_tpl->tpl_vars['videosNb']->value;?>
)</a></li>
<?php }?><?php }} ?>
