<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 19:59:08
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\simpleslideshow\simpleslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62975453dbfc3f8da8-47102712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8f3c17eff9c250ec1e9b010ee8bee2e410f35d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\simpleslideshow\\simpleslideshow.tpl',
      1 => 1414700201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62975453dbfc3f8da8-47102712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'image' => 0,
    'modules_dir' => 0,
    'imgLink' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453dbfc4c0155_09665498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453dbfc4c0155_09665498')) {function content_5453dbfc4c0155_09665498($_smarty_tpl) {?><section id="ei-slider" class="flexslider loading_mainslider">
	<ul class="slides">
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
		<li>
			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
"><?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['name'])&&$_smarty_tpl->tpl_vars['image']->value['name']) {?>
				<?php $_smarty_tpl->tpl_vars["imgLink"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['modules_dir']->value)."simpleslideshow/slides/".((string)$_smarty_tpl->tpl_vars['image']->value['name']), null, 0);?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['imgLink']->value), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" >
				<?php }?>	

				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?></a><?php }?>
			</li>
			<?php } ?>
		</ul><!-- ei-slider-large -->
</section><!-- ei-slider -->
<?php }} ?>
