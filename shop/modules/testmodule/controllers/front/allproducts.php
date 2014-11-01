<?php
Class testmoduleAllproductsModuleFrontController extends ModuleFrontController
{
	 public function init()
	{	
		$this->display_column_left = false;
		$this->display_column_right = false;
		$this->page_name = 'allproducts'; // page_name and body id
		parent::init();
	}
	
	public function setMedia()
	{
		parent::setMedia();
		$this->addCSS(__PS_BASE_URI__.'modules/'.$this->module->name.'/css/'.$this->module->name.'.css');
		$this->addCSS(array(
				_THEME_CSS_DIR_.'scenes.css' => 'all',
				_THEME_CSS_DIR_.'category.css' => 'all',
				_THEME_CSS_DIR_.'product_list.css' => 'all',
		));
		 
	}
	
	public function initContent()
	{
		parent::initContent();
 
		$products_count = $this->module->countAllProducts();
		$this->pagination($products_count); // needs to be here, so that page number and products per page are assigned to "p" and "n"
		 
		$products_partial = Product::getProducts($this->context->language->id, ((int)$this->p - 1) * (int)$this->n, $this->n, 'name', 'asc');
		$products = Product::getProductsProperties($this->context->language->id, $products_partial);
		//var_dump($products_partial);
		$crowd_products = array();
		foreach ($products as $key => $product) {
			$enabled_property = $this->module->getCrowdFundingEnabled($product['id_product']);
			if (count($enabled_property) != 0){
				if ($enabled_property[0]['enabled_crowdfunding'] == 1)
					$crowd_products[] = $product;
			}
				
			foreach ($products as $key => $product) {
				$products[$key]['id_image'] = Product::getCover($product['id_product'])['id_image'];
			}
		}  
		$this->context->smarty->assign(array(
			'products' => $crowd_products,
			'homeSize' => Image::getSize('home_default')
		));
		$this->setTemplate('allproducts.tpl');
		
	}
}