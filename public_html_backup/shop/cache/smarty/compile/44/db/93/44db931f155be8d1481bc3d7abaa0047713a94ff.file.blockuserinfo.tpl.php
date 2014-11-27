<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 03:41:58
         compiled from "/home/xavi/public_html/shop/themes/warehouse/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5097612105473ec76af18c8-29573360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44db931f155be8d1481bc3d7abaa0047713a94ff' => 
    array (
      0 => '/home/xavi/public_html/shop/themes/warehouse/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1410984197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5097612105473ec76af18c8-29573360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473ec76b2ee37_24631598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473ec76b2ee37_24631598')) {function content_5473ec76b2ee37_24631598($_smarty_tpl) {?><div class="header_user_info col-xs-12 col-sm-4 col-sm-offset-<?php echo 4-$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width'];?>
">
	<p><?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><i class="icon-user"></i> <span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a> / 
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 <i class="icon-signout"></i>
		</a>
	<?php } else { ?>
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="icon-signin"></i> <?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php }?>
</p>
    <p><?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
<div class="fblogin-link fblogin">
<p onclick="fblogin_mypresta();"><span><?php echo smartyTranslate(array('s'=>'','mod'=>'fblogin'),$_smarty_tpl);?>
</span></p>
</div>
<?php }?>
</p>
</div>
<?php }} ?>
