<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 08:11:08
         compiled from "/home/xavi/public_html/shop/admin1014/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1147553999543b6cfc16d3b6-98040162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c4e59f9a38a967acc954198b749263f62ce2cf1' => 
    array (
      0 => '/home/xavi/public_html/shop/admin1014/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1410930225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1147553999543b6cfc16d3b6-98040162',
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
  'unifunc' => 'content_543b6cfc178cc8_33383141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543b6cfc178cc8_33383141')) {function content_543b6cfc178cc8_33383141($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
