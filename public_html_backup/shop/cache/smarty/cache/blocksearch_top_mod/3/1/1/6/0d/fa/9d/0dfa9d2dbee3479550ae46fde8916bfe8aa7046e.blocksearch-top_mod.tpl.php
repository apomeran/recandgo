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
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543784a09994d6_39262821',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543784a09994d6_39262821')) {function content_543784a09994d6_39262821($_smarty_tpl) {?><div id="search_block_top_content" class="col-xs-12 col-sm-3 col-sm-pull-6 disable_center "><div id="search_block_top"><form method="get" action="http://recandgo.com/shop/es/buscar" id="searchbox"><label for="search_query_top"></label> <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar productos" value="" /> <button type="submit" name="submit_search" class="button-search"> <span>Buscar productos</span> </button></form></div></div><?php }} ?>
