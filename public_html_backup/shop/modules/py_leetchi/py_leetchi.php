<?php

class PY_Leetchi extends PaymentModule
{
	public $author = '';
	
	private $_confvars = array(
		'PY_LEETCHI_USER'			=>	'',
		'PY_LEETCHI_PASS'			=>	'',
		'PY_LEETCHI_MERCHANTID'		=>	'',
		'PY_LEETCHI_MINIMUMCART'	=>	0,
		'PY_LEETCHI_SERVER'			=>	'test',
	);
	
	public function __construct()
	{
		$this->name = 'py_leetchi';
		$this->tab = ((int)substr(_PS_VERSION_, 2, 1) >= 4 ? 'payments_gateways' : 'Payment');
		$this->version = 1.0;
		$this->author = 'PierreYves.be';

        parent::__construct();

		$this->page = basename(__FILE__, '.php');
        $this->displayName = $this->l('Leetchi.com');
        $this->description = $this->l('Propose les paiements via Leetchi.com à vos clients');
	}
	
	public function install()
	{
		parent::install();
		
		$this->registerHook('payment');
		$this->registerHook('orderConfirmation');
		
		$this->saveConf($this->_confvars);
		
		return true;
	}
	
	public function uninstall()
	{
		parent::uninstall();
		
		foreach ($this->_confvars as $key => $value)
			Configuration::deleteByName($key);
					
		return true;
	}
	
	private function processPOST()
	{
		if (Tools::isSubmit('PY_LEETCHI_UPDATE'))
		{
			$conf = $this->getConf();

			foreach ($this->_confvars as $key => $value)
				$conf[$key] = Tools::getValue($key, $value);
			
			$this->saveConf($conf);
			
			return '<center>'.$this->displayConfirmation('Configuration enregistrée').'</center>';
		}
	}
	
	public function getContent()
	{
		global $cookie;
		
		$content = '
			<fieldset style="font-size: 12px; margin-bottom: 15px;">
				<h2 style="margin: 0px; padding: 0px; line-height: 16px; font-size: 15px;"><img src="'.$this->_path.'logo.gif" /> <a style="color: #268CCD;" href="'.$_SERVER['REQUEST_URI'].'"/>'.$this->displayName.'</a></h2>
				'.$this->description.'
			</fieldset>';

		$content .= $this->processPOST();

		$currency_euro = new Currency( (int)Currency::getIdByIsoCode('EUR') );
		if (!Validate::isLoadedObject($currency_euro))
			$content .= $this->displayError($this->l('La devise EURO est obligatoire pour ce module. Nous avons détecté que cette devise n\'existe pas sur votre site, merci de l\'installer.'));
		
		$conf = $this->getConf();
		
		// Configuration du module
		if (true)
		{
			$content .= '
			<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset style="margin-top: 15px;">
				<legend><img src="'.__PS_BASE_URI__.'img/admin/cog.gif" alt="" class="middle" />'.$this->l('Configuration du module').'</legend>
				
				<label>'.$this->l('Utilisateur Leetchi.com').'</label>
				<div class="margin-form">
					<input type="text" name="PY_LEETCHI_USER" value="'.$conf['PY_LEETCHI_USER'].'" />
				</div>
				
				<label>'.$this->l('Mot de passe Leetchi.com').'</label>
				<div class="margin-form">
					<input type="text" name="PY_LEETCHI_PASS" value="'.$conf['PY_LEETCHI_PASS'].'" />
				</div>
				
				<label>'.$this->l('Id Marchand Leetchi.com').'</label>
				<div class="margin-form">
					<input type="text" name="PY_LEETCHI_MERCHANTID" value="'.$conf['PY_LEETCHI_MERCHANTID'].'" />
				</div>
				
				<label>'.$this->l('Serveur').'</label>
				<div class="margin-form">
					<select name="PY_LEETCHI_SERVER">
						<option value="test" '.($conf['PY_LEETCHI_SERVER'] == 'test' ? 'selected="selected"' : '').'>'.$this->l('Pré-Production').'</option>
						<option value="production" '.($conf['PY_LEETCHI_SERVER'] == 'production' ? 'selected="selected"' : '').'>'.$this->l('Production').'</option>
					</select>
				</div>

				<label>'.$this->l('Panier minimum').'</label>
				<div class="margin-form">
					<input type="text" style="width: 50px; text-align: right;" name="PY_LEETCHI_MINIMUMCART" value="'.$conf['PY_LEETCHI_MINIMUMCART'].'" /> €
				</div>
			</fieldset>
			
			<fieldset style="margin-top: 15px;">
				<center><input type="submit" name="PY_LEETCHI_UPDATE" value="'.$this->l('Enregistrer les modifications').'" class="button" /></center>
			</fieldset>
			</form>';
		}
		
		return $content;
	}
	
	public function hookPayment($params)
	{
		global $cookie, $smarty;
		
		$conf = $this->getConf();
		
		$currency_euro = new Currency( (int)Currency::getIdByIsoCode('EUR') );
		
		if (!Validate::isLoadedObject($currency_euro))
			return '';
		
		$montant = number_format(Tools::convertPrice($params['cart']->getOrderTotal(true, 3), $currency_euro), 2, '', '');
		if (((int)$montant / 100) < (int)$conf['PY_LEETCHI_MINIMUMCART'])
			return '';

		$PY_LEETCHI = array(
			'server'			=> ($conf['PY_LEETCHI_SERVER'] == 'test' ? 'www-preprod.leetchi.com' : 'www.leetchi.com'),
			'pay_to_email'		=> $conf['PY_LEETCHI_USER'],
			'status_url'		=> 'http://'.$_SERVER["HTTP_HOST"].__PS_BASE_URI__.'modules/py_leetchi/py_leetchi_response.php',
			'return_url'		=> 'http://'.$_SERVER["HTTP_HOST"].__PS_BASE_URI__.'modules/py_leetchi/py_leetchi_return.php?id_cart='.$params['cart']->id,
			'cancel_url'		=> 'http://'.$_SERVER["HTTP_HOST"].__PS_BASE_URI__,
			'amount'			=> $montant,
			'transaction_id'	=> $params['cart']->id.'_'.time(),
			'id_cart'			=> $params['cart']->id,
		);
		
		$smarty->assign('PY_LEETCHI', $PY_LEETCHI);
		
		return $this->display(__FILE__, 'payment_page.tpl');
	}
	
	public function hookOrderConfirmation($params)
	{
		global $smarty;
		
        if ($params['objOrder']->payment != $this->displayName)
            return '';
        
		return $this->display(__FILE__, 'order_confirmation.tpl');
	}
	
	public function getConf()
	{
		return Configuration::getMultiple( array_keys($this->_confvars) );
	}
	
	public function saveConf($conf)
	{
		foreach ($conf as $k => $v)
			Configuration::updateValue($k, $v);
	}
	
	public function calcMD5($merchant_id, $lma_transaction_id, $lma_amount, $status)
	{
		$conf = $this->getConf();
		return strtoupper(md5($merchant_id . $lma_transaction_id . strtoupper(md5($conf['PY_LEETCHI_PASS'])) . $lma_amount . $status));
	}
}