<?php /*%%SmartyHeaderCode:1615815895543837dc639f77-09336153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1839ac99f317597a49590fbd8e8f0af6b73e1e0d' => 
    array (
      0 => '/home/xavi/public_html/shop/themes/warehouse/modules/socialsharing/socialsharing.tpl',
      1 => 1410993995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1615815895543837dc639f77-09336153',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'product' => 0,
    'link' => 0,
    'module_dir' => 0,
    'product_image_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543837dc6be3d5_29853175',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543837dc6be3d5_29853175')) {function content_543837dc6be3d5_29853175($_smarty_tpl) {?><p class="socialsharing_product list-inline no-print"> <button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('VIDEO BABY http://recandgo.com/shop/en/familia/2-video-baby.html');"> <i class="icon-twitter"></i> Tweet </button> <button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();"> <i class="icon-facebook"></i> Share </button> <button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();"> <i class="icon-google-plus"></i> Google+ </button> <button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click('http://recandgo.com/shop/19-thickbox_default/video-baby.jpg');"> <i class="icon-pinterest"></i> Pinterest </button></p><?php }} ?>
