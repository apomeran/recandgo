<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 16:41:39
         compiled from "/home/xavi/public_html/shop/modules/columnadverts/columnadverts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1470733835545650b36c4fb1-39002541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d706978197658334c1489f759e3d1877c5d93d' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/columnadverts/columnadverts.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1470733835545650b36c4fb1-39002541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'climages' => 0,
    'image' => 0,
    'modules_dir' => 0,
    'imgLink' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545650b36ef8f0_70898923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545650b36ef8f0_70898923')) {function content_545650b36ef8f0_70898923($_smarty_tpl) {?>        <section id="columnadverts" class="block">
			<p class="title_block"><?php echo smartyTranslate(array('s'=>'Check also','mod'=>'columnadverts'),$_smarty_tpl);?>
</p>
	<div class="block_content clearfix">
        	<ul>

        		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['climages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
        		<li>
        			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?>

        			<a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
">
        				<?php }?>
        				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['name'])&&$_smarty_tpl->tpl_vars['image']->value['name']) {?>
        				<?php $_smarty_tpl->tpl_vars["imgLink"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['modules_dir']->value)."columnadverts/slides/".((string)$_smarty_tpl->tpl_vars['image']->value['name']), null, 0);?>
        				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['imgLink']->value), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" >
        				<?php }?>	

        				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?>
        			</a>    
        			<?php }?></li>
        			<?php } ?>
        		</ul><!-- ei-slider-large -->
</div>
        	</section><!-- ei-slider -->




<?php }} ?>
