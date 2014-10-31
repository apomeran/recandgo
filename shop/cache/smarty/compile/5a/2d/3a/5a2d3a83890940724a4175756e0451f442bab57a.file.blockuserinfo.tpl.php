<?php /* Smarty version Smarty-3.1.19, created on 2014-10-30 22:01:27
         compiled from "C:\xampp\htdocs\recandgo\shop\themes\warehouse\modules\blockuserinfo\blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5725452a727a7cb33-71698816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a2d3a83890940724a4175756e0451f442bab57a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\themes\\warehouse\\modules\\blockuserinfo\\blockuserinfo.tpl',
      1 => 1414700209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5725452a727a7cb33-71698816',
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
  'unifunc' => 'content_5452a727b6afe5_98550648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5452a727b6afe5_98550648')) {function content_5452a727b6afe5_98550648($_smarty_tpl) {?><div class="header_user_info col-xs-12 col-sm-4 col-sm-offset-<?php echo 4-$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width'];?>
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
