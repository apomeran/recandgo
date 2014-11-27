<?php /* Smarty version Smarty-3.1.19, created on 2014-10-20 13:50:47
         compiled from "/home/xavi/public_html/shop/modules/customcontactpage/customcontactpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14784362385444f7176d78c7-05116129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b39dbdf507a994252b98a8b3d956f47fde5b8361' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/customcontactpage/customcontactpage.tpl',
      1 => 1410973528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14784362385444f7176d78c7-05116129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customcontactpage_company' => 0,
    'customcontactpage_address' => 0,
    'customcontactpage_phone' => 0,
    'customcontactpage_email' => 0,
    'customcontactpage_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5444f7176fdd46_73044801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5444f7176fdd46_73044801')) {function content_5444f7176fdd46_73044801($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/home/xavi/public_html/shop/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<section id="customcontactpage">
	<div class="row">
	<div class="col-xs-12 col-sm-8">
	<div id="mapcontact"></div>
	</div>	
	<div class="text_info col-xs-12 col-sm-4">
        <h4 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'customcontactpage'),$_smarty_tpl);?>
</h4>
        <ul>
            <li>
                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_company']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_address']->value!='') {?>
            	<li>
            		<i class="icon-map-marker"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_address']->value, ENT_QUOTES, 'UTF-8', true);?>

            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_phone']->value!='') {?>
            	<li>
            		<i class="icon-phone"></i> <?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'customcontactpage'),$_smarty_tpl);?>
 
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_email']->value!='') {?>
            	<li>
            		<i class="icon-envelope-alt"></i> <?php echo smartyTranslate(array('s'=>'Email:','mod'=>'customcontactpage'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_text']->value!='') {?>
            	<li class="customcontactpage_text">
            	<?php echo $_smarty_tpl->tpl_vars['customcontactpage_text']->value;?>

            	</li>
            <?php }?>
        </ul>
    </div></div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>
