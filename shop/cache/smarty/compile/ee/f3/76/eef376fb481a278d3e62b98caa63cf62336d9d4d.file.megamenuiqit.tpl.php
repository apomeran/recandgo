<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 20:42:41
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\megamenuiqit\megamenuiqit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157355453e631643884-92078766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eef376fb481a278d3e62b98caa63cf62336d9d4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\megamenuiqit\\megamenuiqit.tpl',
      1 => 1414700199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157355453e631643884-92078766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mega_menu_width' => 0,
    'mega_menu_style' => 0,
    'mega_menu_border' => 0,
    'base_dir' => 0,
    'mega_home_bg' => 0,
    'mega_txt_color' => 0,
    'mega_menu' => 0,
    'mega_responsivemenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453e631770544_18568938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453e631770544_18568938')) {function content_5453e631770544_18568938($_smarty_tpl) {?><div class="col-xs-12 megamenuiqit-container <?php if (isset($_smarty_tpl->tpl_vars['mega_menu_width']->value)&&($_smarty_tpl->tpl_vars['mega_menu_width']->value==1)) {?> megamenuiqit-container-full <?php }?>">
<nav id="topmenuContener" class="megamenuiqit megamenu_styleb<?php echo $_smarty_tpl->tpl_vars['mega_menu_style']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['mega_menu_style']->value)&&($_smarty_tpl->tpl_vars['mega_menu_style']->value==1)) {?> megamenu_style2<?php }?><?php if (isset($_smarty_tpl->tpl_vars['mega_menu_width']->value)&&($_smarty_tpl->tpl_vars['mega_menu_width']->value==1)) {?> mmfullwidth <?php } else { ?> mmfixed<?php }?> mega-menu-border-<?php echo $_smarty_tpl->tpl_vars['mega_menu_border']->value;?>
" role="navigation">
    <div class="container">
        <div class="row">
       <ul id="megamenuiqit" class="clearfix">
        <li class="megamenu_home"><a class="main_menu_link megamenu_home_lnk" title="<?php echo smartyTranslate(array('s'=>'Home','mod'=>'megamenuiqit'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" style="background-color: <?php echo $_smarty_tpl->tpl_vars['mega_home_bg']->value;?>
;
color: <?php echo $_smarty_tpl->tpl_vars['mega_txt_color']->value;?>
"><i class="icon-home"></i></a></li>
        <?php echo $_smarty_tpl->tpl_vars['mega_menu']->value;?>

    </ul>

    
    <div id="responsiveMenu">
        <div id="responsiveMenuShower" class="clearfix">
            <div class="responsiveInykator2"><i class="icon-reorder"></i></div>
            <span><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'megamenuiqit'),$_smarty_tpl);?>
</span>
        </div>
        <ul id="responsiveAccordion"> 
         <li><a title="<?php echo smartyTranslate(array('s'=>'Home','mod'=>'megamenuiqit'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><?php echo smartyTranslate(array('s'=>'Home','mod'=>'megamenuiqit'),$_smarty_tpl);?>
</a></li>
         <?php echo $_smarty_tpl->tpl_vars['mega_responsivemenu']->value;?>

     </ul>
 </div> </div>
</div>
</nav>
</div>


<?php }} ?>
