<script>
hs.skin.contentWrapper =
	'<div class="highslide-header"><ul>'+
		
		'<li class="highslide-close">'+
			'<a href="#" title="Fermer" onclick="return hs.close(this)">'+
			'<span>Fermer</span></a>'+
		'</li>'+
	'</ul></div>'+
	'<div class="highslide-body"></div>'+
	'<div class="highslide-footer">'+
	'<iframe src="inside-footeriframe.html" frameborder="0"></iframe>'+
	
	'</div>';
	
	
function submitToHighslide(form) {

    // identify the submit button to start the animation from
    var anchor;
    for (var i = 0; i < form.elements.length; i++) {
    	if (form.elements[i].type == 'submit') {
			anchor = form.elements[i];
			break;
		}
	}

	// open an expander and submit our form when the iframe is ready
	hs.overrides.push('onAfterExpand');
	hs.htmlExpand(anchor, {
		objectType: 'iframe',
		src: 'about:blank',
		width: 800,
		objectHeight: 565,
		onAfterExpand: function(expander) {
			form.target = expander.iframe.name;
			form.submit();
		}
	});

	// return false to delay the sumbit until the iframe is ready
	return false;
}



</script>


<form  id="PY_LEETCHI_FORM" name="PY_LEETCHI_FORM" action="https://{$PY_LEETCHI.server}/Payment" method="get">
	<input type="hidden" name="pay_to_email" value="{$PY_LEETCHI.pay_to_email}"/>
	<input type="hidden" name="status_url" value="{$PY_LEETCHI.status_url}"/>
	<input type="hidden" name="return_url" value="{$PY_LEETCHI.return_url}"/>
	<input type="hidden" name="cancel_url" value="{$PY_LEETCHI.cancel_url}"/>
	<input type="hidden" name="amount" value="{$PY_LEETCHI.amount}"/>
	<input type="hidden" name="transaction_id" value="{$PY_LEETCHI.transaction_id}" />
	<input type="hidden" name="merchant_fields" value="id_cart" />
	<input type="hidden" name="id_cart" value="{$PY_LEETCHI.id_cart}" />
</form>

<p class="payment_module">
	<a id="py_leetchi" href="#" onclick="return submitToHighslide(PY_LEETCHI_FORM)" title="{l s='Payer via Leetchi.com' mod='py_leetchi'}" style="text-align: center;">
		{l s="Payer avec" mod="py_leetchi"}<br/>
		<img src="{$base_dir}modules/py_leetchi/leetchi.png" alt="{l s='Payer via Leetchi.com' mod='py_leetchi'}" width="190" height="50" style="margin: auto;" />
	</a>
</p>



<script type="text/javascript">
        function change_parent_url(url)
        {
	    document.location=url;
        }		
    </script>
