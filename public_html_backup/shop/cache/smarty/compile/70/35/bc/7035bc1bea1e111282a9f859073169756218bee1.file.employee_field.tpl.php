<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 23:59:57
         compiled from "/home/xavi/public_html/shop/admin1014/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6153675425454146d3a0086-95818098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7035bc1bea1e111282a9f859073169756218bee1' => 
    array (
      0 => '/home/xavi/public_html/shop/admin1014/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1410930185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6153675425454146d3a0086-95818098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5454146d3dbde7_97703415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5454146d3dbde7_97703415')) {function content_5454146d3dbde7_97703415($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
