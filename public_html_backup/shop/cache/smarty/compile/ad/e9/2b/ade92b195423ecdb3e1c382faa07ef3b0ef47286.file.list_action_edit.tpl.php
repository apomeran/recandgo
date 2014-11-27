<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:03:56
         compiled from "/home/xavi/public_html/shop/admin1014/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53902799543784dc35c838-90078242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade92b195423ecdb3e1c382faa07ef3b0ef47286' => 
    array (
      0 => '/home/xavi/public_html/shop/admin1014/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1410930225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53902799543784dc35c838-90078242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543784dc367fa0_44567684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543784dc367fa0_44567684')) {function content_543784dc367fa0_44567684($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
