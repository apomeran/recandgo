<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:04:09
         compiled from "/home/xavi/public_html/shop/admin1014/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2096562288543784e95a9483-06924627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0156fb6227fa81607095bd69f9c6421ca4768dcd' => 
    array (
      0 => '/home/xavi/public_html/shop/admin1014/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1410930225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096562288543784e95a9483-06924627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543784e95b8171_41418187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543784e95b8171_41418187')) {function content_543784e95b8171_41418187($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
