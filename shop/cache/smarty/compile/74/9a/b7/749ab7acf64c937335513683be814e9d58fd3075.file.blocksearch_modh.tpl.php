<?php /* Smarty version Smarty-3.1.19, created on 2014-10-30 22:01:24
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\blocksearch_mod\blocksearch_modh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184455452a7243d0e61-33599300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749ab7acf64c937335513683be814e9d58fd3075' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\blocksearch_mod\\blocksearch_modh.tpl',
      1 => 1414700195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184455452a7243d0e61-33599300',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5452a72452c938_31878224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5452a72452c938_31878224')) {function content_5452a72452c938_31878224($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'more_products_search')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'More products »','mod'=>'blocksearch_mod','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
