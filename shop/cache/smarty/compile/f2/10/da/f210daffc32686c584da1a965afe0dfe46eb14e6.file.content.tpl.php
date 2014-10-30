<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:02:01
         compiled from "/home/xavi/public_html/shop/admin1014/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:817727638543784692f64d7-89657219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f210daffc32686c584da1a965afe0dfe46eb14e6' => 
    array (
      0 => '/home/xavi/public_html/shop/admin1014/themes/default/template/content.tpl',
      1 => 1410929864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '817727638543784692f64d7-89657219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54378469310ae3_46588550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54378469310ae3_46588550')) {function content_54378469310ae3_46588550($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
