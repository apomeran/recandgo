<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 18:16:31
         compiled from "/home/xavi/public_html/shop/modules/orderfiles/views/templates/hook/my-account-16.tpl" */ ?>
<?php /*%%SmartyHeaderCode:720190428543aa95f397ac2-68493221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f93b9f2490003b889ff61993668b3b9b609b918' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/orderfiles/views/templates/hook/my-account-16.tpl',
      1 => 1411156329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '720190428543aa95f397ac2-68493221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543aa95f3a3454_48164295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543aa95f3a3454_48164295')) {function content_543aa95f3a3454_48164295($_smarty_tpl) {?><?php if (Configuration::get("OF_CACCOUNT")==1) {?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('orderfiles','myfiles');?>
" title="<?php echo smartyTranslate(array('s'=>'Upload own files for your orders','mod'=>'orderfiles'),$_smarty_tpl);?>
"><i class="icon-cloud-upload"></i><span><?php echo smartyTranslate(array('s'=>'Files uploader','mod'=>'orderfiles'),$_smarty_tpl);?>
</span></a></li>
<?php }?><?php }} ?>
