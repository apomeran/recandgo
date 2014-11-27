<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 18:17:05
         compiled from "/home/xavi/public_html/shop/modules/orderfiles/views/templates/front/filesmanager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95271325543aa9811cae76-54303131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e7295f9fffdfcd8ba7303a46e4a7bfc2df2f098' => 
    array (
      0 => '/home/xavi/public_html/shop/modules/orderfiles/views/templates/front/filesmanager.tpl',
      1 => 1411162510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95271325543aa9811cae76-54303131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'order' => 0,
    'mod' => 0,
    'files' => 0,
    'modules_dir' => 0,
    'file' => 0,
    'idorder' => 0,
    'extensions' => 0,
    'ext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543aa98127b253_73100249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543aa98127b253_73100249')) {function content_543aa98127b253_73100249($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'orderfiles'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('orderfiles','myfiles');?>
" title="<?php echo smartyTranslate(array('s'=>'Upload own files for your orders','mod'=>'orderfiles'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Files uploader','mod'=>'orderfiles'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Files manager','mod'=>'orderfiles'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h2 style="margin-top:20px;"><?php echo smartyTranslate(array('s'=>'Your order','mod'=>'orderfiles'),$_smarty_tpl);?>
</h2>
<table id="order-list" class="std">
	<thead>
		<tr>
			<th class="first_item"><?php echo smartyTranslate(array('s'=>'Order Reference','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
			<th class="item"><?php echo smartyTranslate(array('s'=>'Date','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
			<th class="item"><?php echo smartyTranslate(array('s'=>'Total price','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
			<th class="item"><?php echo smartyTranslate(array('s'=>'Payment','mod'=>'orderfiles'),$_smarty_tpl);?>
</th>
		</tr>
	</thead>
	<tbody>
		<tr class="first_item ">
			<td class="history_link bold">
				<?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
						
			</td>
			<td class="history_date bold"><?php echo $_smarty_tpl->tpl_vars['order']->value->date_add;?>
</td>
			<td class="history_price"><span class="price"><?php echo $_smarty_tpl->tpl_vars['order']->value->total_paid;?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->currency_sign($_smarty_tpl->tpl_vars['order']->value->id_currency);?>
</span></td>
			<td class="history_method"><?php echo $_smarty_tpl->tpl_vars['order']->value->payment;?>
</td>
		</tr>
	</tbody>
</table>
<h2 style="margin-top:20px;"><?php echo smartyTranslate(array('s'=>'Files manager','mod'=>'orderfiles'),$_smarty_tpl);?>
</h2>
    <div class="filesmanager_contents">
	<?php if (empty($_smarty_tpl->tpl_vars['files']->value['toorder'])&&empty($_smarty_tpl->tpl_vars['files']->value['tocart'])&&empty($_smarty_tpl->tpl_vars['files']->value['toproduct'])) {?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No files','mod'=>'orderfiles'),$_smarty_tpl);?>
</p>
	<?php } else { ?>
		<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files']->value['toorder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
			<div class="warning" style="position:relative; display:block; clear:both; overflow:hidden; margin-bottom:10px;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
orderfiles/img/file.png" style="display:inline-block; float:left; margin-right:10px;"/>
				<div style="display:inline-block; float:left; padding-bottom:30px;">
					<b><?php echo $_smarty_tpl->tpl_vars['file']->value['title'];?>
</b> (<i><?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
</i>)
					<p style="margin-top:5px; display:block; clear:both; width:420px; line-height:20px;"><?php echo $_smarty_tpl->tpl_vars['file']->value['description'];?>
</p>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('orderfiles','filesmanager');?>
">
						<input type="hidden" name="oid" value="<?php echo $_smarty_tpl->tpl_vars['idorder']->value;?>
"/>
						<input type="hidden" name="fid" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"/>
						<input type="submit" name="delfile" value="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'orderfiles'),$_smarty_tpl);?>
" class="button" style="position:absolute; right:10px; bottom:10px;"/>
					</form>
				</div>
			</div>
		<?php } ?>
        <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files']->value['tocart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
			<div class="warning" style="position:relative; display:block; clear:both; overflow:hidden; margin-bottom:10px;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
orderfiles/img/file.png" style="display:inline-block; float:left; margin-right:10px;"/>
				<div style="display:inline-block; float:left; padding-bottom:30px;">
					<b><?php echo $_smarty_tpl->tpl_vars['file']->value['product']->name;?>
</b> (<i><?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
</i>)
					<p style="margin-top:5px; display:block; clear:both; width:420px; line-height:20px;"><?php echo $_smarty_tpl->tpl_vars['file']->value['description'];?>
</p>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('orderfiles','filesmanager');?>
">
						<input type="hidden" name="oid" value="<?php echo $_smarty_tpl->tpl_vars['idorder']->value;?>
"/>
						<input type="hidden" name="fid" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"/>
						<input type="submit" name="delcartfile" value="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'orderfiles'),$_smarty_tpl);?>
" class="button" style="position:absolute; right:10px; bottom:10px;"/>
					</form>
				</div>
			</div>
		<?php } ?>
        <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files']->value['toproduct']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
			<div class="warning" style="position:relative; display:block; clear:both; overflow:hidden; margin-bottom:10px;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
orderfiles/img/file.png" style="display:inline-block; float:left; margin-right:10px;"/>
				<div style="display:inline-block; float:left; padding-bottom:30px;">
					<b><?php echo $_smarty_tpl->tpl_vars['file']->value['product']->name;?>
</b> (<i><?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
</i>)
					<p style="margin-top:5px; display:block; clear:both; width:420px; line-height:20px;"><?php echo $_smarty_tpl->tpl_vars['file']->value['description'];?>
</p>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('orderfiles','filesmanager');?>
">
						<input type="hidden" name="oid" value="<?php echo $_smarty_tpl->tpl_vars['idorder']->value;?>
"/>
						<input type="hidden" name="fid" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"/>
						<input type="submit" name="delproductfile" value="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'orderfiles'),$_smarty_tpl);?>
" class="button" style="position:absolute; right:10px; bottom:10px;"/>
					</form>
				</div>
			</div>
		<?php } ?>
	<?php }?>
    </div>

<?php if (Configuration::get('OF_AJAXUPLOAD')==1) {?>
        <script type="text/javascript">
            
                $(function() {
                    var uploadObj = $("#fileuploader").uploadFile({
                        url:baseDir+"modules/orderfiles/ajax/upload.php",
                        multiple:true,
                        autoSubmit:true,
                        fileName:"file",
                        maxFileSize:<?php echo Configuration::get('OF_MAX_FILE_SIZE');?>
*1024,
                        allowedTypes:"<?php if ($_smarty_tpl->tpl_vars['extensions']->value!='') {?><?php  $_smarty_tpl->tpl_vars['ext'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ext']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ext']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['ext']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['ext']->key => $_smarty_tpl->tpl_vars['ext']->value) {
$_smarty_tpl->tpl_vars['ext']->_loop = true;
 $_smarty_tpl->tpl_vars['ext']->iteration++;
 $_smarty_tpl->tpl_vars['ext']->last = $_smarty_tpl->tpl_vars['ext']->iteration === $_smarty_tpl->tpl_vars['ext']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['last'] = $_smarty_tpl->tpl_vars['ext']->last;
?><?php echo $_smarty_tpl->tpl_vars['ext']->value;?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['last']) {?>,<?php }?><?php } ?><?php } else { ?>*<?php }?>",
                        showStatusAfterSuccess:true,
                        formData: {"oid":"<?php echo $_smarty_tpl->tpl_vars['idorder']->value;?>
","auptype":"order"},
                        dragDropStr: "<span><b><?php echo smartyTranslate(array('s'=>'Drag & Drop files here','mod'=>'orderfiles'),$_smarty_tpl);?>
</b></span>",
                        abortStr:"<?php echo smartyTranslate(array('s'=>'Abort','mod'=>'orderfiles'),$_smarty_tpl);?>
",
                        cancelStr:"<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'orderfiles'),$_smarty_tpl);?>
",
                        doneStr:"<?php echo smartyTranslate(array('s'=>'Done!','mod'=>'orderfiles'),$_smarty_tpl);?>
",
                        multiDragErrorStr: "<?php echo smartyTranslate(array('s'=>'Several Drag & Drop files are not allowed.','mod'=>'orderfiles'),$_smarty_tpl);?>
",
                        extErrorStr:"<?php echo smartyTranslate(array('s'=>'is not allowed. Allowed extensions:','mod'=>'orderfiles'),$_smarty_tpl);?>
",
                        sizeErrorStr:"<?php echo smartyTranslate(array('s'=>'is not allowed. Allowed max size:','mod'=>'orderfiles'),$_smarty_tpl);?>
",
                        uploadErrorStr:"<?php echo smartyTranslate(array('s'=>'Upload is not allowed','mod'=>'orderfiles'),$_smarty_tpl);?>
",
                        onSuccess:function(files,obj,xhr,pd)
                        {
                        	$('.filesmanager_contents').append(obj);
                        }
                        });
                });
            
        </script>
        <div id="fileuploader"><?php echo smartyTranslate(array('s'=>'Upload','mod'=>'orderfiles'),$_smarty_tpl);?>
</div>
<?php } else { ?>        
<h2 style="margin-top:20px;"><?php echo smartyTranslate(array('s'=>'File uploader','mod'=>'orderfiles'),$_smarty_tpl);?>
</h2>
<div class="warning" style="clear:both; overflow:hidden;">
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('orderfiles','filesmanager');?>
" enctype="multipart/form-data" onsubmit="return Validate(this);">
		<div style="margin-bottom:15px; display:block; clear:both; overflow:hidden;">
			<label style="vertical-align:top; display:inline-block; min-width:150px; text-align:right; padding-right:10px;"><?php echo smartyTranslate(array('s'=>'title','mod'=>'orderphoto'),$_smarty_tpl);?>
:</label><input type="text" name="title"/>
		</div>
		<div style="margin-bottom:15px; display:block; clear:both; overflow:hidden;">
			<label style="vertical-align:top; display:inline-block; min-width:150px; text-align:right; padding-right:10px;"><?php echo smartyTranslate(array('s'=>'description','mod'=>'orderphoto'),$_smarty_tpl);?>
:</label><textarea style="margin:0px; padding:0px; display:inline-block; width:300px; height:60px;" name="description"></textarea>
		</div>
		<div style="margin-bottom:15px; display:block; clear:both; overflow:hidden;">
			<input type="hidden" name="oid" value="<?php echo $_smarty_tpl->tpl_vars['idorder']->value;?>
"/>
			<label style="vertical-align:top; display:inline-block; min-width:150px; text-align:right; padding-right:10px;"><?php echo smartyTranslate(array('s'=>'file','mod'=>'orderphoto'),$_smarty_tpl);?>
:</label><input type="file" name="file[]" multiple="multiple"/>
		</div>
		<div style="text-align:center; display:block; margin-top:25px; margin-bottom:15px;">
			<input type="submit" name="addfile" value="<?php echo smartyTranslate(array('s'=>'Add file','mod'=>'orderfiles'),$_smarty_tpl);?>
" class="button"/>
		</div>
	</form>
</div>
<p><?php }?></p>
<p><p>We Transfer</p>
<p>
  <iframe src="//wetransfer.com/" frameborder="0" width="330" height="400"></iframe>
</p></p>
<?php }} ?>
