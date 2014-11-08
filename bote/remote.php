<?php

define('DEBUG', false);           // Debug mode
define('PS_SHOP_PATH', 'http://recandgo.com/shop');  // Root path of your PrestaShop store
define('PS_WS_AUTH_KEY', '6I18GYIEPVVGFB95U76Y5I8JWY9ALPEB'); // Auth key (Get it in your Back Office)
require_once('PSWebServiceLibrary.php');


if(isset($_REQUEST['action'])){
	
	$action = $_REQUEST['action'];
	switch($action){
    case "getProduct":
		$prodArray = getProductsFromPrestashop();
		
		foreach($prodArray as $product){
			if($product->getId() == $_REQUEST['id']){
				$arr = array('category_id' => $product->getCategoryId() , 'price' => $product->getPrice());
				echo json_encode($arr);
			}
			
		}
		return null;
        break;
	}
	die;


}


class Crowd_Funding_Product {

    protected $id;
    protected $name;
    protected $category_id;
    protected $price;
    protected $active;
    protected $condition;

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function getPrice() {
        return (double)$this->price;
    }

    public function setPrice($value) {
        $this->price = $value;
    }

    public function getActive() {
        return $this->active;
    }

    public function setActive($value) {
        $this->active = $value;
    }

    public function getCondition() {
        return $this->condition;
    }

    public function setCondition($value) {
        $this->condition = $value;
    }

    public function getCategoryId() {
        return $this->category_id;
    }

    public function setCategoryId($value) {
        $this->category_id = $value;
    }

    public function __construct() {
        // Constructor
    }

    public function example_class_function() {
        // Some function
    }

}


function getProductsFromPrestashop() {
        $productArray = array();
        // Here we make the WebService Call
        try {
            $webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);

            // Here we set the option array for the Webservice : we want customers resources
            $opt['resource'] = 'products';
            $opt['display'] = 'full';
            $opt['filter[active]'] = '[1]';
            $xmlArray = $webService->get($opt);
			foreach($xmlArray['products']['product'] as $key=>$product){
					$prod = new Crowd_Funding_Product();
					$prod->setId($product['id']);
					$prod->setName($product['name']['language'][0]);
					$prod->setPrice($product['price']);
					$prod->setCategoryId($product['id_category_default']);
					$prod->setCondition($product['condition']);
					$prod->setActive($product['active']);
					$productArray[] = $prod;
					
			}
			

            // $resources = $xml->products->children();
            // if (isset($resources)) {
                // foreach ($resources as $key => $resource) {
                  
                    // $product = new Crowd_Funding_Product();
					// foreach ($resource->children() as $k => $r)
                    // var_dump($r->attributes());
                    // die;

                    // $product[] = $resource->attributes();
                // }
            // }
        } catch (PrestaShopWebserviceException $e) {
            // Here we are dealing with errors
            $trace = $e->getTrace();
            if ($trace[0]['args'][0] == 404)
                echo 'Bad ID';
            else if ($trace[0]['args'][0] == 401)
                echo 'Bad auth key';
            else
                echo 'Other error';
        }
        return $productArray;
 }