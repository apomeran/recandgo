<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 10:52:36
         compiled from "/home/xavi/public_html/shop/themes/warehouse/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194863400354379e54de4339-65794391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916a844b573611714b2fc3aef079145f703eba6a' => 
    array (
      0 => '/home/xavi/public_html/shop/themes/warehouse/404.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194863400354379e54de4339-65794391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54379e54e98d71_52725423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54379e54e98d71_52725423')) {function content_54379e54e98d71_52725423($_smarty_tpl) {?>
<div class="pagenotfound">
	<div class="img-404">
    	<i class="icon-frown"></i>
    	<?php echo smartyTranslate(array('s'=>'404'),$_smarty_tpl);?>

    </div>
	<h1><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</h1>

	<p>
		<?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>

	</p>

	<h3><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
		<fieldset>
			<div>
				<label for="search_query"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
				<input id="search_query" name="search_query" type="text" class="form-control grey" />
                <button type="submit" name="Submit" value="OK" class="btn btn-default button button-small"><span><i class="icon-search"></i> <?php echo smartyTranslate(array('s'=>'Ok'),$_smarty_tpl);?>
</span></button>
			</div>
		</fieldset>
	</form>

	<div class="buttons"><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><span><i class="icon-chevron-left left"></i> <?php echo smartyTranslate(array('s'=>'Home page'),$_smarty_tpl);?>
</span></a></div>
</div>
<?php }} ?>
