<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:02:01
         compiled from "/home/xavi/public_html/shop/admin1014/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202057902254378469423a20-35306619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc8071d87b68982af9ed39a98e4e812c37163971' => 
    array (
      0 => '/home/xavi/public_html/shop/admin1014/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1410930227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202057902254378469423a20-35306619',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543784694334d7_43606853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543784694334d7_43606853')) {function content_543784694334d7_43606853($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
