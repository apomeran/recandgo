<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 20:34:29
         compiled from "C:\xampp\htdocs\recandgo\shop\themes\warehouse\modules\blockwishlist\blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63135453e44554b280-56690525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c1555b003dd9d0ad58de027274c07a62cb91170' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\themes\\warehouse\\modules\\blockwishlist\\blockwishlist_button.tpl',
      1 => 1414700209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63135453e44554b280-56690525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453e445585c12_27271030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453e445585c12_27271030')) {function content_5453e445585c12_27271030($_smarty_tpl) {?>

<div class="wishlist col-xs-3">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="nofollow" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
