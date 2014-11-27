<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 08:14:16
         compiled from "/home/xavi/public_html/shop/admin1014/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1021675509543b6db87f2ca1-99594451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe8ee25c0c778838852965c62936407b012b08d' => 
    array (
      0 => '/home/xavi/public_html/shop/admin1014/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1410930179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1021675509543b6db87f2ca1-99594451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543b6db87fb614_79084172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543b6db87fb614_79084172')) {function content_543b6db87fb614_79084172($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>
