<?php

require(dirname(__FILE__).'/../../config/config.inc.php');
require(dirname(__FILE__).'/py_leetchi.php');

$data = $_POST;
$module = new PY_Leetchi();



if ($module->calcMD5($data['merchant_id'], $data['lma_transaction_id'], $data['lma_amount'], $data['status']) != $data['md5sig'])
	die('Hack Attempt');

switch ((int)$data['status'])
{
	case -2:
		// Status -> Failed
		// On ne fait rien
		break;
	case -1:
		// Status -> Cancelled
		// On ne fait rien
		break;
	case 0:
		// Status -> Pending
		// On ne fait rien
		break;
	case 2:
		// Status -> Processed
		// Paiement accepté, on valide la commande

		$cart = new Cart( (int)$data['id_cart'] );
		if (Validate::isLoadedObject($cart))
		{
			if ((int)substr(_PS_VERSION_, 2, 1) >= 4)
				$module->validateOrder((int)$cart->id, _PS_OS_PAYMENT_, $cart->getOrderTotal(), $module->displayName, 'Transaction ID : '.pSQL($data['lma_transaction_id']), array(), NULL, false, $cart->secure_key);
			else
				$module->validateOrder((int)$cart->id, _PS_OS_PAYMENT_, $cart->getOrderTotal(), $module->displayName, 'Transaction ID : '.pSQL($data['lma_transaction_id']));
		}		
		break;
}