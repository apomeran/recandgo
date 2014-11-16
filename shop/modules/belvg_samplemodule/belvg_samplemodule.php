<?php

/*
 * 2007-2013 PrestaShop 
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 *         DISCLAIMER   *
 * *************************************** */
/* Do not edit or add to this file if you wish to upgrade Prestashop to newer
 * versions in the future.
 * ****************************************************
 * @category   Belvg
 * @package    Belvg_SampleModule
 * @author    Alexander Simonchik <support@belvg.com>
 * @site    
 * @copyright  Copyright (c) 2010 - 2013 BelVG LLC. (http://www.belvg.com)
 * @license    http://store.belvg.com/BelVG-LICENSE-COMMUNITY.txt 
 */


if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(dirname(__FILE__) . '/classes/Belvg_Sample.php');

class Belvg_SampleModule extends Module {

    public function __construct() {
        $this->name = 'belvg_samplemodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'BelVG';
        $this->need_instance = 0;
        $this->module_key = "";

        parent::__construct();

        $this->displayName = $this->l('Opciones CrowdFunding');
        $this->description = $this->l('Works with displayAdminProductsExtra and actionProductUpdate');
    }

    public function install() {
        $sql = array();
	
        $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'product_crowdfunding` (
                  `id_belvg_samplemodule` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `id_product` INT( 11 ) UNSIGNED NOT NULL,
                  `textarea` TEXT NOT NULL,
                  `enabled_crowdfunding` INT NOT NULL DEFAULT "1",
                  PRIMARY KEY (`id_belvg_samplemodule`),
                  UNIQUE  `BELVG_SAMPLE_UNIQ` (  `id_product` )
                ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';
                                
        if (!parent::install() OR 
            !$this->registerHook('displayAdminProductsExtra') OR
            !$this->registerHook('actionProductUpdate') OR
            !$this->registerHook('displayFooterProduct') OR
			!Configuration::updateValue('sample_module_textarea', '') OR
            !$this->runSql($sql)
        ) {
            return FALSE;
        }
        
        return TRUE;
    }
    
    public function uninstall() {
        $sql = array();
	
        $sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'product_crowdfunding`';
        if (!parent::uninstall() OR
            !$this->runSql($sql) 
        ) {
            return FALSE;
        }

        return TRUE;
    }
    
    public function runSql($sql) {
        foreach ($sql as $s) {
			if (!Db::getInstance()->Execute($s)){
				return FALSE;
			}
        }
        
        return TRUE;
    }
    
    public function hookDisplayAdminProductsExtra($params) {
        $id_product = Tools::getValue('id_product');
        $sampleObj = Belvg_Sample::loadByIdProduct($id_product);
        if(!empty($sampleObj) && isset($sampleObj->id)){
            $this->context->smarty->assign(array(
                'belvg_textarea' => $sampleObj->textarea,
                'belvg_enabled_crowdfunding' => $sampleObj->enabled_crowdfunding,
            ));
        }
        
        return $this->display(__FILE__, 'views/admin/sample.tpl');
    }
    
    public function hookActionProductUpdate($params) {
        $id_product = Tools::getValue('id_product');
        $sampleObj = Belvg_Sample::loadByIdProduct($id_product);
        $sampleObj->textarea = Tools::getValue('belvg_sample');
		$sampleObj->enabled_crowdfunding = 0;
		if (Tools::getValue('enabled_crowdfunding') == 'on')
			$sampleObj->enabled_crowdfunding = 1;
        $sampleObj->id_product = $id_product;
        
        if(!empty($sampleObj) && isset($sampleObj->id)){
            $sampleObj->update();
        } else {
            $sampleObj->add();
        }
    }
    
    public function hookDisplayFooterProduct($params) {
        $id_product = Tools::getValue('id_product');
        $sampleObj = Belvg_Sample::loadByIdProduct($id_product);
        if(!empty($sampleObj) && isset($sampleObj->id)){
            $this->context->smarty->assign(array(
                'belvg_textarea' => $sampleObj->textarea,
                'belvg_enabled_crowdfunding' => $sampleObj->enabled_crowdfunding,

            ));
        }
        
        return $this->display(__FILE__, 'views/frontend/sample.tpl');
    }
    
}