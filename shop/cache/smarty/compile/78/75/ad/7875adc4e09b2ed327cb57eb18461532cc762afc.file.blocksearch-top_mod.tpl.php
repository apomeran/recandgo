<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 20:42:40
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\blocksearch_mod\blocksearch-top_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290045453e630558eb9-18646838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7875adc4e09b2ed327cb57eb18461532cc762afc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\blocksearch_mod\\blocksearch-top_mod.tpl',
      1 => 1414700195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290045453e630558eb9-18646838',
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
  'unifunc' => 'content_5453e6306c8201_59305140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453e6306c8201_59305140')) {function content_5453e6306c8201_59305140($_smarty_tpl) {?>
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
