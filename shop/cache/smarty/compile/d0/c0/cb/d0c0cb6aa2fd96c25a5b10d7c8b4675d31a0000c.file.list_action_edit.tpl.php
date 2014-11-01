<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 18:07:35
         compiled from "C:\xampp\htdocs\recandgo\shop\admin1014\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2348054551357782944-38932628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0c0cb6aa2fd96c25a5b10d7c8b4675d31a0000c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\admin1014\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1414854870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2348054551357782944-38932628',
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
  'unifunc' => 'content_5455135778e5e1_79537387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5455135778e5e1_79537387')) {function content_5455135778e5e1_79537387($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
