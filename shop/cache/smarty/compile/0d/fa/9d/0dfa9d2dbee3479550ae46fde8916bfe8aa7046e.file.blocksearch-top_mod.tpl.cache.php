<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:02:56
         compiled from "/home/xavi/public_html/shop/modules/blocksearch_mod/blocksearch-top_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1969815135543784a0948ee9-34493652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dfa9d2dbee3479550ae46fde8916bfe8aa7046e' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/blocksearch_mod/blocksearch-top_mod.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1969815135543784a0948ee9-34493652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543784a0994d02_55485853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543784a0994d02_55485853')) {function content_543784a0994d02_55485853($_smarty_tpl) {?>
	<!-- Block search module TOP -->
	<div id="search_block_top_content" class="col-xs-12 col-sm-<?php echo 4-$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width']/2;?>
 <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_position'])&&!$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_position']) {?> col-sm-pull-<?php echo 4+$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width'];?>
 disable_center<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['search_position'])&&!$_smarty_tpl->tpl_vars['warehouse_vars']->value['search_position']) {?> on_menu<?php }?>">
	<div id="search_block_top">

		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">

			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<button type="submit" name="submit_search" class="button-search">
				<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</span>
			</button>
		</form>
	</div></div>


	<!-- /Block search module TOP -->
<?php }} ?>
