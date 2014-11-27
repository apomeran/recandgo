<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 18:18:36
         compiled from "/home/xavi/public_html/shop/modules/orderfiles/views/templates/front/access-denied.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2026756112543aa9dc36c5b4-59264019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0437ff188ce3ca654012ef494da0f9c6219b1463' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/orderfiles/views/templates/front/access-denied.tpl',
      1 => 1411156329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2026756112543aa9dc36c5b4-59264019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543aa9dc38c305_66531618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543aa9dc38c305_66531618')) {function content_543aa9dc38c305_66531618($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'orderfiles'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('orderfiles','myfiles');?>
" title="<?php echo smartyTranslate(array('s'=>'Upload own files for your orders','mod'=>'orderfiles'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Files uploader','mod'=>'orderfiles'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Files manager','mod'=>'orderfiles'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h2 style="margin-top:20px;"><?php echo smartyTranslate(array('s'=>'Your order','mod'=>'orderfiles'),$_smarty_tpl);?>
</h2>
<p class="warning"><?php echo smartyTranslate(array('s'=>'Access denied','mod'=>'orderfiles'),$_smarty_tpl);?>
</p><?php }} ?>
