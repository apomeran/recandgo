<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 18:16:49
         compiled from "/home/xavi/public_html/shop/modules/orderfiles/views/templates/front/my-files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:717663806543aa971bd1e81-55510538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3c471d58435142bcf1becc3bae592af86714c13' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/orderfiles/views/templates/front/my-files.tpl',
      1 => 1411156329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '717663806543aa971bd1e81-55510538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'psversion' => 0,
    'orders' => 0,
    'order' => 0,
    'mod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543aa971c16736_24427774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543aa971c16736_24427774')) {function content_543aa971c16736_24427774($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'orderfiles'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Files uploader','mod'=>'orderfiles'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['psversion']->value==5) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<h2 style="margin-top:20px;"><?php echo smartyTranslate(array('s'=>'Your orders','mod'=>'orderfiles'),$_smarty_tpl);?>
</h2>
<p class="warning"><?php echo smartyTranslate(array('s'=>'select order from your order list for which you want to upload files','mod'=>'orderfiles'),$_smarty_tpl);?>
</p>
<table id="order-list" class="std">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Order Reference','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Date','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Total price','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Payment','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Status','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
				<th class="last_item" style="width:65px"><?php echo smartyTranslate(array('s'=>'Files','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['order']->key;
?>
			<?php if (empty($_smarty_tpl->tpl_vars['orders']->value)) {?>
			<tr class="first_item ">
				<td colspan="6">
					<?php echo smartyTranslate(array('s'=>'If you want upload files, order products first','mod'=>'orderfiles'),$_smarty_tpl);?>

				</td>
			</tr>
			<?php } else { ?>
				<tr class="first_item ">
					<td class="history_link bold">
						<?php echo $_smarty_tpl->tpl_vars['order']->value['reference'];?>
						
					</td>
					<td class="history_date bold"><?php echo $_smarty_tpl->tpl_vars['order']->value['date_add'];?>
</td>
					<td class="history_price"><span class="price"><?php echo $_smarty_tpl->tpl_vars['order']->value['total_paid'];?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->currency_sign($_smarty_tpl->tpl_vars['order']->value['id_currency']);?>
</span></td>
					<td class="history_method"><?php echo $_smarty_tpl->tpl_vars['order']->value['payment'];?>
</td>
					<td class="history_state"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_state'];?>
</td>
					<td class="history_detail"><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('orderfiles','filesmanager');?>
"><input type="hidden" name="oid" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" /><input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Manage','mod'=>'orderfiles'),$_smarty_tpl);?>
"/></form></td>
				</tr>
			<?php }?>
		<?php } ?>
	</tbody>
</table><?php }} ?>
