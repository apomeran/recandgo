<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:02:56
         compiled from "/home/xavi/public_html/shop/modules/blocksearch_mod/blocksearch_modh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1117054054543784a06b41c0-40705657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8f3dd96688a66d7aeeaf7514865a9dd9f1eaf1' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/blocksearch_mod/blocksearch_modh.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1117054054543784a06b41c0-40705657',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543784a06ddf97_23192117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543784a06ddf97_23192117')) {function content_543784a06ddf97_23192117($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'more_products_search')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'More products »','mod'=>'blocksearch_mod','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
