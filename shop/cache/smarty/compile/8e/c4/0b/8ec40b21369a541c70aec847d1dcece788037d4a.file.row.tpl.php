<?php /* Smarty version Smarty-3.1.19, created on 2014-11-01 18:05:48
         compiled from "C:\xampp\htdocs\recandgo\shop\admin1014\themes\default\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29926545512ec7d6125-83465608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec40b21369a541c70aec847d1dcece788037d4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\admin1014\\themes\\default\\template\\helpers\\kpi\\row.tpl',
      1 => 1414854870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29926545512ec7d6125-83465608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545512ec7dd339_03456197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545512ec7dd339_03456197')) {function content_545512ec7dd339_03456197($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value) {
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-6 col-lg-3">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>
