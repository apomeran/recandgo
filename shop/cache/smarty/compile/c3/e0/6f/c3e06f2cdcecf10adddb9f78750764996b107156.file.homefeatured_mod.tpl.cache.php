<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 19:59:06
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\homefeatured_mod\homefeatured_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159885453dbfa6cb1a6-30742035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3e06f2cdcecf10adddb9f78750764996b107156' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\homefeatured_mod\\homefeatured_mod.tpl',
      1 => 1414700198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159885453dbfa6cb1a6-30742035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453dbfa728db6_00855841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453dbfa728db6_00855841')) {function content_5453dbfa728db6_00855841($_smarty_tpl) {?>	<!-- MODULE Home Featured Products -->
	<section id="featured-products_block_center_mod" class="block products_block flexslider_carousel_block clearfix">
		<h4><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeatured_mod'),$_smarty_tpl);?>
</h4>
		<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'id'=>'featured_products_slider'), 0);?>

		<?php } else { ?>
		<p>
			<?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured_mod'),$_smarty_tpl);?>

		</p>
		<?php }?>
	</section>
	<!-- /MODULE Home Featured Products -->
<?php }} ?>
