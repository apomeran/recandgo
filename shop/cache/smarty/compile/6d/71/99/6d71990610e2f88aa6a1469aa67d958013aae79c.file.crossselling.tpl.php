<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 17:39:27
         compiled from "/home/xavi/public_html/shop/themes/warehouse/modules/blockcart/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191363103543aa0af6ca531-59468153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d71990610e2f88aa6a1469aa67d958013aae79c' => 
    array (
      0 => '/home/xavi/public_html/shop/themes/warehouse/modules/blockcart/crossselling.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191363103543aa0af6ca531-59468153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543aa0af6e1954_99043039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543aa0af6e1954_99043039')) {function content_543aa0af6e1954_99043039($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)>0) {?>
	<div class="crossseling-content">
		<h5 class="crossseling_pop_title"><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'blockcart'),$_smarty_tpl);?>
</h5>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['orderProducts']->value,'id'=>'crossseling_popup_products_slider'), 0);?>

	</div>
<?php }?><?php }} ?>
