<?php

require(dirname(__FILE__).'/../../config/config.inc.php');
require(dirname(__FILE__).'/py_leetchi.php');

$id_cart = (int)Tools::getValue('id_cart');
$module = new PY_Leetchi();
$cart = new Cart( (int)$id_cart );


if (Validate::isLoadedObject($cart))
{
	$order = new Order( (int)Order::getOrderByCartId((int)$cart->id) );
	$var = '<script>';
	$var .= 'function redirectParent(){
				parent.change_parent_url(\''.__PS_BASE_URI__.'order-confirmation.php?id_cart='.$cart->id.'&id_module='.$module->id.'&key='.$order->secure_key.'\');
			}
			setTimeout(redirectParent(),4000);';
	$var .= '</script>';
	echo($var);

	//header('Location: '.__PS_BASE_URI__.'order-confirmation.php?id_cart='.$cart->id.'&id_module='.$module->id.'&key='.$order->secure_key);
}