<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 18:16:31
         compiled from "/home/xavi/public_html/shop/themes/warehouse/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1282229959543aa95f37e060-29553917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f4b4d4e3744014cc0d7ff775e2aafc6008e47e4' => 
    array (
      0 => '/home/xavi/public_html/shop/themes/warehouse/modules/blockwishlist/my-account.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1282229959543aa95f37e060-29553917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543aa95f391910_88838807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543aa95f391910_88838807')) {function content_543aa95f391910_88838807($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
