<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 20:42:41
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\headerlinks\headerlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90785453e631434287-10568927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '266c0cac80161f9d43d19bdce4f07b2cbf0b175f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\headerlinks\\headerlinks.tpl',
      1 => 1414700198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90785453e631434287-10568927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headerlinks_links' => 0,
    'lang' => 0,
    'headerlinks_link' => 0,
    'url' => 0,
    'showcontactlink' => 0,
    'link' => 0,
    'showsitemaplink' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453e6315af162_20774918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453e6315af162_20774918')) {function content_5453e6315af162_20774918($_smarty_tpl) {?>

<!-- Block header links module -->
<ul id="header_links" class="clearfix">

    	<?php  $_smarty_tpl->tpl_vars['headerlinks_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['headerlinks_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headerlinks_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['headerlinks_link']->key => $_smarty_tpl->tpl_vars['headerlinks_link']->value) {
$_smarty_tpl->tpl_vars['headerlinks_link']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['headerlinks_link']->value[$_smarty_tpl->tpl_vars['lang']->value])) {?> 
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerlinks_link']->value[$_smarty_tpl->tpl_vars['url']->value], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['headerlinks_link']->value['newWindow']) {?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerlinks_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
		<?php }?>
	<?php } ?>
    
    	<?php if (isset($_smarty_tpl->tpl_vars['showcontactlink']->value)&&$_smarty_tpl->tpl_vars['showcontactlink']->value==1) {?><li id="header_link_contact"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact','mod'=>'headerlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'headerlinks'),$_smarty_tpl);?>
</a></li><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['showsitemaplink']->value)&&$_smarty_tpl->tpl_vars['showsitemaplink']->value==1) {?><li id="header_link_sitemap"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Sitemap','mod'=>'headerlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sitemap','mod'=>'headerlinks'),$_smarty_tpl);?>
</a></li><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['title']->value)&&$_smarty_tpl->tpl_vars['title']->value!='') {?> 
    <?php if ((isset($_smarty_tpl->tpl_vars['showcontactlink']->value)&&$_smarty_tpl->tpl_vars['showcontactlink']->value==1)||(isset($_smarty_tpl->tpl_vars['showsitemaplink']->value)&&$_smarty_tpl->tpl_vars['showsitemaplink']->value==1)) {?><li class="separator">|</li><?php }?>
    
    <li><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li><?php }?>
</ul>
<!-- /Block header links module -->
<?php }} ?>
