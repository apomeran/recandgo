<form target="fancybox-frame-py" id="PY_LEETCHI_FORM" name="PY_LEETCHI_FORM" action="https://{$PY_LEETCHI.server}/Payment" method="post">
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
	<a id="py_leetchi" href="return false;" onclick="GOLEETCHI(); return false;" title="{l s='Payer via Leetchi.com' mod='py_leetchi'}" style="text-align: center;">
		{l s="Payer avec" mod="py_leetchi"}<br/>
		<img src="{$base_dir}modules/py_leetchi/leetchi.png" alt="{l s='Payer via Leetchi.com' mod='py_leetchi'}" width="190" height="50" style="margin: auto;" />
	</a>
</p>

<script type="text/javascript">
	function GOLEETCHI()
	{
		$.fancybox(
			'py_leetchi',
			{
				'type': 'iframe',
	        	'autoDimensions'	: false,
				'width'         	: 800,
				'height'        	: 550,
				'href'				: 'http://www.google.be',
				'onComplete'		: function() { $("#PY_LEETCHI_FORM").attr('target' , $("#fancybox-frame").attr('name')); document.PY_LEETCHI_FORM.submit(); }
			}
		);
	}
</script>

<script type="text/javascript">
        function change_parent_url(url)
        {
	    document.location=url;
        }		
    </script>
