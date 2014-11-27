<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 03:41:59
         compiled from "/home/xavi/public_html/shop/themes/warehouse/modules/ph_recentposts/views/templates/hook/recent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15758543135473ec77022795-86064386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47cb5abc2da235a2257f5774b17b1c218a928e54' => 
    array (
      0 => '/home/xavi/public_html/shop/themes/warehouse/modules/ph_recentposts/views/templates/hook/recent.tpl',
      1 => 1410973527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15758543135473ec77022795-86064386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'columns' => 0,
    'blogLayout' => 0,
    'cols' => 0,
    'post' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473ec770c19f1_18605225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473ec770c19f1_18605225')) {function content_5473ec770c19f1_18605225($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/xavi/public_html/shop/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)>0) {?>
<div class="ph_simpleblog simpleblog-recent block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Recent posts','mod'=>'ph_recentposts'),$_smarty_tpl);?>
</p>
	<div class="row simpleblog-posts block_content ">
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

			<?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable('col-xs-12 col-ms-6 col-sm-6', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['columns'] = new Smarty_variable(Configuration::get('PH_RECENTPOSTS_GRID_COLUMNS'), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['columns']->value=='3') {?>
				<?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable('col-xs-12 col-ms-6 col-sm-4', null, 0);?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['columns']->value=='4') {?>
				<?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable('col-xs-12 col-ms-6 col-sm-3', null, 0);?>
			<?php }?>

			<div class="simpleblog-post-item <?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='grid') {?><?php echo $_smarty_tpl->tpl_vars['cols']->value;?>
<?php } else { ?>col-md-12<?php }?>">

				<div class="post-item">

					<?php if (isset($_smarty_tpl->tpl_vars['post']->value['banner'])&&Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')) {?>
						<div class="post-thumbnail">
							<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
">
								<?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='full') {?>
									<img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['banner_wide'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" class="img-responsive" />
								<?php } else { ?>
									<img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['banner_thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" class="img-responsive" />
								<?php }?>
							</a>
						<h2>
							<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</a>
						</h2>
						</div>
					<?php }?>
						<?php if (!isset($_smarty_tpl->tpl_vars['post']->value['banner'])||!Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')) {?>
					<div class="post-title">
				
						<h2>
							<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</a>
						</h2>
						
					</div>	<?php }?>
					<div class="post-content">
						
						<?php if (Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['short_content'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['post']->value['short_content'];?>

							</a>
						<?php }?>
					</div>	

					<div class="post-additional-info">
						<?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>
							<span class="post-date">
								<?php echo smartyTranslate(array('s'=>'Posted on:','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],Configuration::get('PH_BLOG_DATEFORMAT'));?>

							</span>
						<?php }?>

						<?php if (Configuration::get('PH_BLOG_DISPLAY_CATEGORY')) {?>
							<span class="post-category">
								<?php echo smartyTranslate(array('s'=>'Posted in:','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['category_url'];?>
" title=""><?php echo $_smarty_tpl->tpl_vars['post']->value['category'];?>
</a>
							</span>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['post']->value['author'])&&!empty($_smarty_tpl->tpl_vars['post']->value['author'])&&Configuration::get('PH_BLOG_DISPLAY_AUTHOR')) {?>
							<span class="post-author">
								<?php echo smartyTranslate(array('s'=>'Author:','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['author'];?>

							</span>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['post']->value['tags'])&&$_smarty_tpl->tpl_vars['post']->value['tags']&&Configuration::get('PH_BLOG_DISPLAY_TAGS')) {?>
							<span class="post-tags clear">
								<?php echo smartyTranslate(array('s'=>'Tags:','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 
								<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tagsLoop']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
									<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tagsLoop']['last']) {?>, <?php }?>
								<?php } ?>
							</span>
						<?php }?>
					</div><!-- .additional-info -->
				</div>
			</div><!-- .simpleblog-post-item -->

		<?php } ?>
	</div><!-- .ph_row -->
</div><!-- .ph_simpleblog -->
<script>

$(window).load(function() {
SimpleBlogEqualHeight();
	});

$( window ).resize(function() {
SimpleBlogEqualHeight();
});

function SimpleBlogEqualHeight()
{
  	var mini = 0;
  	//	$('.simpleblog-post-item .post-item').removeAttr( 'style' );
  	$('.simpleblog-post-item .post-item .post-content').removeAttr( 'style' );
  	$('.simpleblog-post-item .post-item').each(function(){
      	if(parseInt($(this).height()) > mini )
      	{
        	mini = parseInt($(this).height());
      	}  
      	

  	});

  	  	$('.simpleblog-post-item .post-item').each(function(){
  	$(this).find('.post-content').height($(this).find('.post-content').height()+(mini - $(this).height()));
  	});
  	$('.simpleblog-post-item .post-item').parent().css('height',mini+10);  
}
</script>
<?php }?><?php }} ?>
