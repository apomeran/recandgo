<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 16:41:39
         compiled from "/home/xavi/public_html/shop/modules/standardtweets/standardtweets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1600295591545650b377d0c4-26763767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad7050ada98e74065236599483bb2879e38a74a' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/standardtweets/standardtweets.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1600295591545650b377d0c4-26763767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'widgetid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545650b3783807_05964571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545650b3783807_05964571')) {function content_545650b3783807_05964571($_smarty_tpl) {?><section id="standardtweets_module" class="block clearfix">
<a class="twitter-timeline" href="https://twitter.com/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" data-widget-id="<?php echo $_smarty_tpl->tpl_vars['widgetid']->value;?>
">Tweets by @<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</section>
<?php }} ?>
