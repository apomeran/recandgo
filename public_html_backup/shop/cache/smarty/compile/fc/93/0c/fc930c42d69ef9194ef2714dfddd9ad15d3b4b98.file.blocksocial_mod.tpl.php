<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 03:41:59
         compiled from "/home/xavi/public_html/shop/modules/blocksocial_mod/blocksocial_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10190375775473ec773d91b3-09600680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc930c42d69ef9194ef2714dfddd9ad15d3b4b98' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/blocksocial_mod/blocksocial_mod.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10190375775473ec773d91b3-09600680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'google_url' => 0,
    'youtube_url' => 0,
    'vimeo_url' => 0,
    'pinterest_url' => 0,
    'instagram_url' => 0,
    'tumblr_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473ec77415211_11875477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473ec77415211_11875477')) {function content_5473ec77415211_11875477($_smarty_tpl) {?><section id="social_block_mod" class="footer-block col-xs-12 col-sm-3">
	<div>
		<h4><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
</h4>
		<ul class="toggle-footer clearfix">
			<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?><li class="facebook"><a href="<?php echo $_smarty_tpl->tpl_vars['facebook_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?><li class="twitter"><a href="<?php echo $_smarty_tpl->tpl_vars['twitter_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['google_url']->value!='') {?><li class="google"><a href="<?php echo $_smarty_tpl->tpl_vars['google_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Google +','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?><li class="youtube"><a href="<?php echo $_smarty_tpl->tpl_vars['youtube_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['vimeo_url']->value!='') {?><li class="vimeo"><a href="<?php echo $_smarty_tpl->tpl_vars['vimeo_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Vimeo','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?><li class="pinterest"><a href="<?php echo $_smarty_tpl->tpl_vars['pinterest_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['instagram_url']->value!='') {?><li class="instagram"><a href="<?php echo $_smarty_tpl->tpl_vars['instagram_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tumblr_url']->value!='') {?><li class="tumblr"><a href="<?php echo $_smarty_tpl->tpl_vars['tumblr_url']->value;?>
" target="_blank" class="transition-300" title="<?php echo smartyTranslate(array('s'=>'Tumblr','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!='') {?><li class="rss"><a href="<?php echo $_smarty_tpl->tpl_vars['rss_url']->value;?>
" target="_blank" class="transition-300" title="<?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
		</ul></div>
</section>
<?php }} ?>
