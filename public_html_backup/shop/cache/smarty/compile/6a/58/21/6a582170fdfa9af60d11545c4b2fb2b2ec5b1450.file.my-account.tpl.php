<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 16:41:39
         compiled from "/home/xavi/public_html/shop/modules/orderfiles/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:480472910545650b36fd504-43165753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a582170fdfa9af60d11545c4b2fb2b2ec5b1450' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/orderfiles/views/templates/hook/my-account.tpl',
      1 => 1411156329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '480472910545650b36fd504-43165753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545650b3708e14_00061158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545650b3708e14_00061158')) {function content_545650b3708e14_00061158($_smarty_tpl) {?><?php if (Configuration::get("OF_CACCOUNT")==1) {?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('orderfiles','myfiles');?>
" title="<?php echo smartyTranslate(array('s'=>'Upload own files for your orders','mod'=>'orderfiles'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Files uploader','mod'=>'orderfiles'),$_smarty_tpl);?>
</a></li>
<?php }?> <?php }} ?>
