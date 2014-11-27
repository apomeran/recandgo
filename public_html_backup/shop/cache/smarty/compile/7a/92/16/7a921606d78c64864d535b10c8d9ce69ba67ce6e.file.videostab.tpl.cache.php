<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 21:47:40
         compiled from "/home/xavi/public_html/shop/modules/videostab/views/templates/hook/videostab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1126481836543837dc7ed368-62066104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a921606d78c64864d535b10c8d9ce69ba67ce6e' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/videostab/views/templates/hook/videostab.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1126481836543837dc7ed368-62066104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videos' => 0,
    'video' => 0,
    'this_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543837dc804704_42381926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543837dc804704_42381926')) {function content_543837dc804704_42381926($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>
<section class="page-product-box tab-pane fade" id="videosTab">
    <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['video']->value['type']==0) {?>
        <div class="videoWrapper videotab_video"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['video']->value['video']);?>
</div>
        <?php } else { ?>
        <div class="mp4content videotab_video">
        <video style="width:100%;height:100%;" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
uploads/<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['video']->value['video']);?>
" type="video/mp4" 
	id="player1" 
	controls="controls" preload="none"></video>
    </div>
        <?php }?>
    <?php } ?>
</section>
<?php }?><?php }} ?>
