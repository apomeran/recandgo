<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 21:47:40
         compiled from "/home/xavi/public_html/shop/modules/additionalproductstabs/views/templates/hook/additionaltab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122945579543837dc80f1f9-87701383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ffb245a9ad45433ded953f3faa5f1a81ab9c67c' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/additionalproductstabs/views/templates/hook/additionaltab.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122945579543837dc80f1f9-87701383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543837dc815360_49001611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543837dc815360_49001611')) {function content_543837dc815360_49001611($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabContent']->value)) {?>
<section class="page-product-box tab-pane fade" id="additionalTab">
<div class="rte"><?php echo $_smarty_tpl->tpl_vars['tabContent']->value;?>
</div>
</section>
<?php }?><?php }} ?>
