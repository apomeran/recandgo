<?php /* Smarty version Smarty-3.1.19, created on 2014-11-16 21:22:19
         compiled from "C:\xampp\htdocs\recandgo\shop\modules\ph_relatedposts\views\templates\hook\admin-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181965469077b73a1b3-26387960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60f6bae97303fb38806c02ff19aae03da49ef31d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\recandgo\\shop\\modules\\ph_relatedposts\\views\\templates\\hook\\admin-tab.tpl',
      1 => 1414854901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181965469077b73a1b3-26387960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_16' => 0,
    'posts' => 0,
    'post' => 0,
    'selected_posts' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5469077b788e23_48434848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5469077b788e23_48434848')) {function content_5469077b788e23_48434848($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_16']->value) {?>
<div class="panel product-tab">
	<h3><?php echo smartyTranslate(array('s'=>'Related Posts:','mod'=>'ph_relatedposts'),$_smarty_tpl);?>
</h3>
	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">

			<div class="row">
				<div class="col-lg-12">
					<?php echo smartyTranslate(array('s'=>'Type to filter posts:','mod'=>'ph_relatedposts'),$_smarty_tpl);?>
 <input type="text" id="related_posts_filter" size="60" />
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<p><?php echo smartyTranslate(array('s'=>'Available posts','mod'=>'ph_relatedposts'),$_smarty_tpl);?>
</p>

					<select multiple id="ph_relatedposts_left">
						<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</option>
						<?php } ?>
					</select>

					<a href="#" id="ph_relatedposts_move_to_right" class="btn btn-default btn-block">
						<?php echo smartyTranslate(array('s'=>'Add','mod'=>'ph_relatedposts'),$_smarty_tpl);?>

						<i class="icon-arrow-right"></i>
					</a>

				</div>
				<div class="col-lg-6">
					<p><?php echo smartyTranslate(array('s'=>'Posts related to this product','mod'=>'ph_relatedposts'),$_smarty_tpl);?>
</p>

					<select multiple id="ph_relatedposts_right" name="related_posts[]">
						<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</option>
						<?php } ?>
					</select>

					<a href="#" id="move_to_left" class="btn btn-default btn-block">
						<i class="icon-arrow-left"></i>
						<?php echo smartyTranslate(array('s'=>'Remove','mod'=>'ph_relatedposts'),$_smarty_tpl);?>

					</a>

				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
	</div>
</div>
<?php } else { ?>
<div class="margin-form">
	<h4><?php echo smartyTranslate(array('s'=>'Related Posts:','mod'=>'ph_relatedposts'),$_smarty_tpl);?>
</h4>
	<?php echo smartyTranslate(array('s'=>'Type to filter posts:','mod'=>'ph_relatedposts'),$_smarty_tpl);?>
 <input type="text" id="related_posts_filter" size="60" />
</div>
<div class="separation"></div>
<div class="margin-form">
<table class="double_select">
	<tr>
		<td>
			<select multiple id="ph_relatedposts_left">
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</option>
				<?php } ?>
			</select>
			<br /><br />
			<a href="#" id="ph_relatedposts_move_to_right" class="multiple_select_add">
				<?php echo smartyTranslate(array('s'=>'Add','mod'=>'ph_relatedposts'),$_smarty_tpl);?>
 &gt;&gt;
			</a>
		</div>
		</td>
		<td>
			<select multiple id="ph_relatedposts_right" name="related_posts[]">
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</option>
				<?php } ?>
			</select>
			<br /><br />
			<a href="#" id="move_to_left" class="multiple_select_remove">
				&lt;&lt; <?php echo smartyTranslate(array('s'=>'Remove','mod'=>'ph_relatedposts'),$_smarty_tpl);?>

			</a>
		</td>
	</tr>
</table>
</div>
<div class="clear">&nbsp;</div>
<?php }?>

<script type="text/javascript">

jQuery.fn.filterByText = function(textbox, selectSingleMatch) {
  return this.each(function() {
    var select = this;
    var options = [];
    $(select).find('option').each(function() {
      options.push({value: $(this).val(), text: $(this).text()});
    });
    $(select).data('options', options);
    $(textbox).bind('change keyup', function() {
      var options = $(select).empty().scrollTop(0).data('options');
      var search = $.trim($(this).val());
      var regex = new RegExp(search,'gi');

      $.each(options, function(i) {
        var option = options[i];
        if(option.text.match(regex) !== null) {
          $(select).append(
             $('<option>').text(option.text).val(option.value)
          );
        }
      });
      if (selectSingleMatch === true && 
          $(select).children().length === 1) {
        $(select).children().get(0).selected = true;
      }
    });
  });
};

$(function() {
    $('#ph_relatedposts_left').filterByText($('#related_posts_filter'), true);
    $('#ph_relatedposts_move_to_right').click(function(){
		return !$('#ph_relatedposts_left option:selected').remove().appendTo('#ph_relatedposts_right');
	})
	$('#move_to_left').click(function(){
		return !$('#ph_relatedposts_right option:selected').remove().appendTo('#ph_relatedposts_left');
	});
	$('#ph_relatedposts_left option').live('dblclick', function(){
		$(this).remove().appendTo('#ph_relatedposts_right');
	});
	$('#ph_relatedposts_right option').live('dblclick', function(){
		$(this).remove().appendTo('#ph_relatedposts_left');
	});
	$('form').on('submit', function()
	{
		$('#ph_relatedposts_right option').each(function(i){
			$(this).attr("selected", "selected");
		});
	});

});
</script><?php }} ?>
