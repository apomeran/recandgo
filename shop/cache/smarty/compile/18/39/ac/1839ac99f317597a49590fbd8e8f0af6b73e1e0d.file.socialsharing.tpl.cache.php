<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 21:47:40
         compiled from "/home/xavi/public_html/shop/themes/warehouse/modules/socialsharing/socialsharing.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_543837dc6b7637_58971106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543837dc6b7637_58971106')) {function content_543837dc6b7637_58971106($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
	<p class="socialsharing_product list-inline no-print">
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
			<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click(<?php if (isset($_smarty_tpl->tpl_vars['product']->value)) {?>'<?php echo htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['product']->value->name), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value));?>
'<?php }?>);">
				<i class="icon-twitter"></i> <?php echo smartyTranslate(array('s'=>"Tweet",'mod'=>'socialsharing'),$_smarty_tpl);?>

				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/twitter.gif");?>
" alt="Tweet" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
			<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> <?php echo smartyTranslate(array('s'=>"Share",'mod'=>'socialsharing'),$_smarty_tpl);?>

				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/facebook.gif");?>
" alt="Facebook Like" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value) {?>
			<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> <?php echo smartyTranslate(array('s'=>"Google+",'mod'=>'socialsharing'),$_smarty_tpl);?>

				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/google.gif");?>
" alt="Google Plus" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
			<?php $_smarty_tpl->tpl_vars["product_image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getCover($_smarty_tpl->tpl_vars['product']->value->id), null, 0);?>
			<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click('<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product_image_id']->value['id_image'],'thickbox_default');?>
');">
				<i class="icon-pinterest"></i> <?php echo smartyTranslate(array('s'=>"Pinterest",'mod'=>'socialsharing'),$_smarty_tpl);?>

				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/pinterest.gif");?>
" alt="Pinterest" /> -->
			</button>
		<?php }?>
	</p>
<?php }?><?php }} ?>
