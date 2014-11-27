<?php

class fblogin extends Module {
	public function __construct(){
		$this->name = 'fblogin';
		$this->tab = 'front_office_features';
		$this->version = '1.2.6';
		$this->author = 'ZAROmkt.com';
		parent::__construct();
        $this->trusted(); 
		$this->displayName = $this->l('Facebook Login');
		$this->description = $this->l('Con este módulo sus clientes podrán ingresar con su cuenta de Facebook.');
        if ($this->psversion()==4){
            global $smarty;
            $this->smarty = $smarty;
        }
	}
    
	public function psversion($part=1) {
		$version=_PS_VERSION_;
		$exp=$explode=explode(".",$version);
        if ($part==1)
		  return $exp[1];
        if ($part==2)
		  return $exp[2];
        if ($part==3)
		  return $exp[3];
	}
        function trusted(){
            if (_PS_VERSION_ >= "1.6.0.8"){
                if (isset($_GET['controller'])){
                    if ($_GET['controller']=="AdminModules"){
                        if (defined('self::CACHE_FILE_TRUSTED_MODULES_LIST')==true){
                            $context = Context::getContext();
                    		$theme = new Theme($context->shop->id_theme);
                    		// Save the 2 arrays into XML files
                    		$trusted_xml = new SimpleXMLElement('<modules_list/>');
                    		$trusted_xml->addAttribute('theme', $theme->name);
                    		$modules = $trusted_xml->addChild('modules');
                    		$modules->addAttribute('type', 'trusted');
                    		$module = $modules->addChild('module');
                    		$module->addAttribute('name', $this->name);
                            $success = file_put_contents( _PS_ROOT_DIR_.self::CACHE_FILE_TRUSTED_MODULES_LIST, $trusted_xml->asXML());
                        }
                    }
                }
            }
        }          
	public function install(){
	    $prefix = _DB_PREFIX_;
	    $sql = array();
        $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'fblogin` (
                  `id_fblogin` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `id_social` VARCHAR(20) NOT NULL,
                  `type` VARCHAR(10) NOT NULL,
                  `hash` VARCHAR(100) NOT NULL,
                  `id_customer` INT(10) UNSIGNED NOT NULL,
                  PRIMARY KEY (`id_fblogin`),
                  UNIQUE  `id_fblogin_unique` (`id_fblogin`)
                 ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';
        
        if ($this->psversion()==5 || $this->psversion()==6){
    		if (!parent::install() ||
                !$this->registerHook('Top') ||
                !$this->registerHook('displayNav') ||
    			!$this->registerHook('leftColumn') ||
                !$this->registerHook('rightColumn') ||
    			!$this->registerHook('footer') ||
    			!$this->registerHook('header') ||
                !$this->registerHook('shoppingCart') ||
                !$this->registerHook('shoppingCartExtra') ||
                !$this->registerHook('createAccountForm') ||
				!$this->registerHook('displayCustomerAcount') ||
				!$this->registerHook('displayCustomerAcountFormTop') ||
                !$this->runSql($sql))
    			return false;            
    		return true;
        }
        if ($this->psversion()==4){
            if (!parent::install() ||
                !$this->registerHook('Top') ||
    			!$this->registerHook('leftColumn') ||
                !$this->registerHook('rightColumn') ||
    			!$this->registerHook('footer') ||
    			!$this->registerHook('header') ||
                !$this->registerHook('shoppingCart') ||
                !$this->runSql($sql))
    			return false;            
    		return true;
        }
	}
    
    public function runSql($sql) {
        foreach ($sql as $s) {
			if (!Db::getInstance()->Execute($s)){
				//return FALSE;
			}
        }
        return TRUE;
    }

    public function verifycustomer($post){
        ini_set("display_errors", 1);
        error_reporting(E_ALL); //E_ALL  
        if (isset($post['email'])){
            if ($this->check_core($post['email'])==false){
                if ($this->check_db($post['id'])==false){
                    $this->loginprocess($this->registeraccount_db($post,$this->registeraccount_core($post),""));
                } else {
                    $this->loginprocess($this->registeraccount_core($post));
                }
            } else {
                if ($this->check_db($post['id'])==false){
                    $this->loginprocess($this->registeraccount_db($post,$this->check_core($post['email']),""));
                } else {
                    $this->loginprocess($this->check_core($post['email']));
                }
            }
        } else {
       echo "alert('no email address');";
        }
    }
    
    public function check_core($email){
        $customer = new Customer();
        $cust=$customer->getByEmail($email);
        if ($cust==false){
            return false;
        } else {
            return $cust->id;
        }
    }
    
    public function check_db($fbid){
        return Db::getInstance()->getRow('SELECT id_customer FROM `'._DB_PREFIX_.'fblogin` WHERE id_social="'.$fbid.'"');
    }
    
    public function registeraccount_db($post,$id_customer,$passwd){
        Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'fblogin` (`id_social`,`type`,`hash`,`id_customer`) VALUES ("'.$post['id'].'","fb","'.$passwd.'","'.$id_customer.'")');
        return $id_customer;
    }
    
    public function registeraccount_core($post){
        $passwd=md5(Tools::passwdGen(8));
        $customer = new Customer();
        $customer->passwd=$passwd;
        $customer->email=$post['email'];
        $customer->firstname=$post['first_name'];
        $customer->lastname=$post['last_name'];
        $customer->active = 1;
        $customer->newsletter = 1;
        $customer->add();
       	$customer->cleanGroups();
        $customer->addGroups(array((int)Configuration::get('fblogin_groupid')));
        return $customer->id;        
    }
    
    public function loginprocess($id_customer){
        if ($this->psversion()==5 || $this->psversion()==6){
            $customer = new Customer($id_customer);
            $this->context->cookie->id_compare = isset($this->context->cookie->id_compare) ? $this->context->cookie->id_compare: CompareProduct::getIdCompareByIdCustomer($customer->id);
            $this->context->cookie->id_customer = (int)($customer->id);
			$this->context->cookie->customer_lastname = $customer->lastname;
			$this->context->cookie->customer_firstname = $customer->firstname;
			$this->context->cookie->logged = 1;
			$customer->logged = 1;
			$this->context->cookie->is_guest = $customer->isGuest();
			$this->context->cookie->passwd = $customer->passwd;
			$this->context->cookie->email = $customer->email;
				
			// Add customer to the context
			$this->context->customer = $customer;
				
			if (Configuration::get('PS_CART_FOLLOWING') && (empty($this->context->cookie->id_cart) || Cart::getNbProducts($this->context->cookie->id_cart) == 0) && $id_cart = (int)Cart::lastNoneOrderedCart($this->context->customer->id))
				$this->context->cart = new Cart($id_cart);
			else {
				$this->context->cart->id_carrier = 0;
				$this->context->cart->setDeliveryOption(null);
				$this->context->cart->id_address_delivery = Address::getFirstCustomerAddressId((int)($customer->id));
				$this->context->cart->id_address_invoice = Address::getFirstCustomerAddressId((int)($customer->id));
			}
			
            $this->context->cart->id_customer = (int)$customer->id;
			$this->context->cart->secure_key = $customer->secure_key;
			$this->context->cart->save();
			$this->context->cookie->id_cart = (int)$this->context->cart->id;
			$this->context->cookie->write();
			$this->context->cart->autosetProductAddress();
			Hook::exec('actionAuthentication');
			// Login information have changed, so we check if the cart rules still apply
			CartRule::autoRemoveFromCart($this->context);
			CartRule::autoAddToCart($this->context);    
            echo 'top.location.reload();';
        }
        
        
        if($this->psversion()==4){
            Module::hookExec('beforeAuthentication');
            global $cookie;
            global $cart;
			$customer = new Customer($id_customer);
            //$cookie->id_compare = isset($cookie->id_compare) ? $cookie->id_compare: CompareProduct::getIdCompareByIdCustomer($customer->id);
			$cookie->id_customer = (int)($customer->id);
			$cookie->customer_lastname = $customer->lastname;
			$cookie->customer_firstname = $customer->firstname;
			$cookie->logged = 1;
			$cookie->is_guest = $customer->isGuest();
			$cookie->passwd = $customer->passwd;
			$cookie->email = $customer->email;
			if (Configuration::get('PS_CART_FOLLOWING') AND (empty($cookie->id_cart) OR Cart::getNbProducts($cookie->id_cart) == 0))
				$cookie->id_cart = (int)(Cart::lastNoneOrderedCart((int)($customer->id)));
			/* Update cart address */
			$cart->id_carrier = 0;
			$cart->id_address_delivery = Address::getFirstCustomerAddressId((int)($customer->id));
			$cart->id_address_invoice = Address::getFirstCustomerAddressId((int)($customer->id));
			// If a logged guest logs in as a customer, the cart secure key was already set and needs to be updated
			$cart->secure_key = $customer->secure_key;
			$cart->update();
			Module::hookExec('authentication');
            echo 'location.reload();';
        }
    }
   
	public function getContent(){
	    $output="";
        if (Tools::isSubmit('hooks_settings')){
            Configuration::updateValue('fbl_shoppingCart', Tools::getValue('fbl_shoppingCart'));
            Configuration::updateValue('fbl_shoppingCartExtra', Tools::getValue('fbl_shoppingCartExtra'));
            Configuration::updateValue('fbl_displayNav', Tools::getValue('fbl_displayNav'));
            Configuration::updateValue('fbl_displayTop', Tools::getValue('fbl_displayTop'));
            Configuration::updateValue('fbl_createAccountForm', Tools::getValue('fbl_createAccountForm'));
            Configuration::updateValue('fbl_popuplogin', Tools::getValue('fbl_popuplogin'));
        }
        
        if (Tools::isSubmit('fblapp_settings')){
            Configuration::updateValue('fbl_appid', Tools::getValue('fbl_appid'));
        }
        
        if (Tools::isSubmit('register_settings')){
            Configuration::updateValue('fblogin_groupid',Tools::getValue('fblogin_groupid'));
        }
        
        
		return $output.$this->displayForm();
	}

	public function displayForm(){
	    if ($this->psversion()==5 || $this->psversion()==6){
                if (Hook::getIdByName(preg_replace("/[^\da-z]/i",'',trim('popuplogin')))==true){
                    $popuplogin='        <div>
                                            <label>'.$this->l('PopUp login').'</label>
                            				<div class="margin-form">
                            					<input type="checkbox" name="fbl_popuplogin" value="1" '.(Configuration::get('fbl_popuplogin')==1 ? 'checked="yes"':'').'/>
                            				</div>
                                        </div>';
                } else {
                    $popuplogin='<div>
                                            <label>'.$this->l('PopUp login').'</label>
                            				<div class="margin-form">
                            					'.$this->l('popup login module is not installed, hook doesnt exist').'
                            				</div>
                                        </div>';
                }
        } elseif ($this->psversion()==4) {
                    $popuplogin='        <div>
                                            <label>'.$this->l('PopUp login').'</label>
                            				<div class="margin-form">
                            					<input type="checkbox" name="fbl_popuplogin" value="1" '.(Configuration::get('fbl_popuplogin')==1 ? 'checked="yes"':'').'/>
                            				</div>
                                        </div>';            
        }
         
               
	    return '
        
                    <div style="margin-bottom:20px;">
                        <form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post">
                            <fieldset style="margin-top:10px;">
                                <legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Facebook app id').'</legend>
                                <div>
                                    <label>'.$this->l('Facebook APP ID').'</label>
                    				<div class="margin-form">
                    					<input type="text" name="fbl_appid" value="'.Configuration::get('fbl_appid').'"/>
                                        '.$this->l('read').' <a target="_blank" href="http://mypresta.eu/en/art/basic-tutorials/how-to-create-facebook-application-id.html">'.$this->l('how to create facebook app id').'</a>
                    				</div>
                                </div>
                               
                                                                         
                				<center><input type="submit" name="fblapp_settings" value="'.$this->l('Save').'" class="button" /></center>          
                            </fieldset>
                        </form>
                    </div>
                            
                    <div>
                        <form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post">
                            <fieldset style="margin-top:10px;">
                                <legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Display login button in:').'</legend>
                                '.($this->psversion()!=4 ? '
                                <div>
                                    <label>'.$this->l('displayNav').'</label>
                    				<div class="margin-form">
                    					<input type="checkbox" name="fbl_displayNav" value="1" '.(Configuration::get('fbl_displayNav')==1 ? 'checked="yes"':'').'/>
                    				</div>
                                </div>
                                ':'').'
                                <div>
                                    <label>'.$this->l('displayTop').'</label>
                    				<div class="margin-form">
                    					<input type="checkbox" name="fbl_displayTop" value="1" '.(Configuration::get('fbl_displayTop')==1 ? 'checked="yes"':'').'/>
                    				</div>
                                </div>
                                <div>
                                    <label>'.$this->l('shoppingCart').'</label>
                    				<div class="margin-form">
                    					<input type="checkbox" name="fbl_shoppingCart" value="1" '.(Configuration::get('fbl_shoppingCart')==1 ? 'checked="yes"':'').'/>
                    				</div>
                                </div>
                                '.($this->psversion()!=4 ? '
                                <div>
                                    <label>'.$this->l('shoppingCartExtra').'</label>
                    				<div class="margin-form">
                    					<input type="checkbox" name="fbl_shoppingCartExtra" value="1" '.(Configuration::get('fbl_shoppingCartExtra')==1 ? 'checked="yes"':'').'/>
                    				</div>
                                </div>
                                <div>
                                    <label>'.$this->l('createAccountForm').'</label>
                    				<div class="margin-form">
                    					<input type="checkbox" name="fbl_createAccountForm" value="1" '.(Configuration::get('fbl_createAccountForm')==1 ? 'checked="yes"':'').'/>
                    				</div>
                                </div>
                                ':'').'     '.$popuplogin.'                              
                				<center><input type="submit" name="hooks_settings" value="'.$this->l('Save').'" class="button" /></center>          
                            </fieldset>
                        </form>
                    </div>
                    
                    <div>
                        <form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post">
                            <fieldset style="margin-top:10px;">
                                <legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Register settings:').'</legend>
                                <div>
                                    <label>'.$this->l('Associate customer with group:').'</label>
                    				<div class="margin-form">
                                    <select name="fblogin_groupid">
                                    '.$this->customerGroup(Configuration::get('fblogin_groupid')).'
                                    </select>
                    				</div>
                                </div>          
                				<center><input type="submit" name="register_settings" value="'.$this->l('Save').'" class="button" /></center>          
                            </fieldset>
                        </form>
                    </div>
                    
                    ';
	}
    
    public function customerGroup($group_id){
        global $cookie;
        $return='';
        foreach (Group::getGroups($cookie->id_lang, $id_shop = false) as $key=>$value){
            $return.='<option '.($group_id == $value['id_group'] ? 'selected="yes"':'').' value="'.$value['id_group'].'">'.$value['name'].'</option>';
        }
        return $return;
    }
    
    public function hookHeader($params){
        if ($this->psversion()==5 || $this->psversion()==6){
            $this->context->controller->addJS(($this->_path).'js/fblogin.js', 'all');
            $this->context->controller->addCSS(($this->_path).'css/fblogin.css', 'all');
        } 
        if ($this->psversion()==4){
            Tools::addJS(($this->_path).'js/fblogin.js', 'all');
            Tools::addCSS(($this->_path).'css/fblogin.css', 'all');            
        }
        
        $this->smarty->assign('fbl_appid',Configuration::get('fbl_appid'));
	       return $this->display(__FILE__, 'header.tpl');
    }
    
    public function hookdisplayFooter($params){
        $this->smarty->assign('fb_psver',$this->psversion());
	    return $this->display(__FILE__, 'footer.tpl');
    }
    public function hookFooter($params){
        $this->smarty->assign('fb_psver',$this->psversion());
        return $this->display(__FILE__, 'footer.tpl');
    }    
    
    public function hookdisplayTop($params){
        $this->smarty->assign('fbl_appid',Configuration::get('fbl_appid'));
        if (Configuration::get('fbl_displayTop')==1)
	       return $this->display(__FILE__, 'top.tpl');
    }
    public function hookTop($params){
        $this->smarty->assign('fbl_appid',Configuration::get('fbl_appid'));
        if (Configuration::get('fbl_displayTop')==1)
	       return $this->display(__FILE__, 'top.tpl');
    }       
    
    public function hookdisplayNav($params){
        $this->smarty->assign('fbl_appid',Configuration::get('fbl_appid'));
        if (Configuration::get('fbl_displayNav')==1)
            return $this->display(__FILE__, 'displayNav.tpl');
    }
    
    public function hookshoppingCart($params){
        $this->smarty->assign('fbl_appid',Configuration::get('fbl_appid'));
        if (Configuration::get('fbl_shoppingCart')==1)
           return $this->display(__FILE__, 'top.tpl');
    }
    
    public function hookshoppingCartExtra($params){
        $this->smarty->assign('fbl_appid',Configuration::get('fbl_appid'));
        if (Configuration::get('fbl_shoppingCartExtra')==1)
            return $this->display(__FILE__, 'top.tpl');
    }

    public function hookcreateAccountForm($params){
        $this->smarty->assign('fbl_appid',Configuration::get('fbl_appid'));
        if (Configuration::get('fbl_createAccountForm')==1)
            return $this->display(__FILE__, 'top.tpl');
    }

    public function hookpopuplogin($params){
        $this->smarty->assign('fbl_appid',Configuration::get('fbl_appid'));
        if (Configuration::get('fbl_popuplogin')==1)
            return $this->display(__FILE__, 'displayPopUpLogin.tpl');  
    }   
}