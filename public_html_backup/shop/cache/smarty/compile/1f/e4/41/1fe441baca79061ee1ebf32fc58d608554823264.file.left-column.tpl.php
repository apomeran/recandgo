<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 16:41:39
         compiled from "/home/xavi/public_html/shop/modules/ph_simpleblog/views/templates/hook/left-column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1656731866545650b37636a3-54882625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe441baca79061ee1ebf32fc58d608554823264' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/ph_simpleblog/views/templates/hook/left-column.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656731866545650b37636a3-54882625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545650b3774e41_69370979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545650b3774e41_69370979')) {function content_545650b3774e41_69370979($_smarty_tpl) {?><div id="ph_simpleblog_categories" class="block informations_block_left">
	<p class="title_block"><a href="<?php echo ph_simpleblog::getLink();?>
" title="<?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</a></p>
	<div class="block_content list-block">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
" title="<?php echo smartyTranslate(array('s'=>'Link to','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
			<?php } ?>
		</ul>
	</div>
</div><?php }} ?>
