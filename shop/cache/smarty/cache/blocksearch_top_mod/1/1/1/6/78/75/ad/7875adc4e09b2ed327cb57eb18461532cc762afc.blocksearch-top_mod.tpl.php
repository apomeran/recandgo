<?php /*%%SmartyHeaderCode:271505452a7267193d8-78085223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '271505452a7267193d8-78085223',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453e442588fd9_67365067',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453e442588fd9_67365067')) {function content_5453e442588fd9_67365067($_smarty_tpl) {?><div id="search_block_top_content" class="col-xs-12 col-sm-3 col-sm-pull-6 disable_center "><div id="search_block_top"><form method="get" action="http://recandgo.com/shop/es/buscar" id="searchbox"><label for="search_query_top"></label> <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar productos" value="" /> <button type="submit" name="submit_search" class="button-search"> <span>Buscar productos</span> </button></form></div></div><?php }} ?>
