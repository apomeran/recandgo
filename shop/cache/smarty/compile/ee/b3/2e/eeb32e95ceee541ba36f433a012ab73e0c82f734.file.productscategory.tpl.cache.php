<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 21:47:40
         compiled from "/home/xavi/public_html/shop/themes/warehouse/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2119355877543837dc424634-41432190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeb32e95ceee541ba36f433a012ab73e0c82f734' => 
    array (
      0 => '/home/xavi/public_html/shop/themes/warehouse/modules/productscategory/productscategory.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2119355877543837dc424634-41432190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543837dc48b846_65999765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543837dc48b846_65999765')) {function content_543837dc48b846_65999765($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false) {?>
<section class="page-product-box flexslider_carousel_block blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading"><?php echo count($_smarty_tpl->tpl_vars['categoryProducts']->value);?>
 <?php echo smartyTranslate(array('s'=>'other products in the same category:','mod'=>'productscategory'),$_smarty_tpl);?>
</h3>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['categoryProducts']->value,'id'=>'category_products_slider'), 0);?>

</section>
<?php }?><?php }} ?>
