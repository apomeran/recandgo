<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:05:01
         compiled from "/home/xavi/public_html/shop/themes/warehouse/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12309274325437851d0418d6-35571199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b541a67a72e2b8284d33148ade5d8a3f88b759b3' => 
    array (
      0 => '/home/xavi/public_html/shop/themes/warehouse/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12309274325437851d0418d6-35571199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5437851d06f170_89930562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5437851d06f170_89930562')) {function content_5437851d06f170_89930562($_smarty_tpl) {?>

<div class="wishlist col-xs-3">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="nofollow" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
