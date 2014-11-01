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

class Belvg_Sample extends ObjectModel
{
	/** @var string Name */
	public $id_belvg_samplemodule;
		
	/** @var integer */
	public $id_product;
	
	/** @var integer */
	public $textarea;
	
	/** @var integer */
	public $enabled_crowdfunding;
	
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'product_crowdfunding',
        'primary' => 'id_belvg_samplemodule',
        'multilang' => FALSE,
        'fields' => array(
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => TRUE),
            'textarea' => array('type' => self::TYPE_HTML, 'validate' => 'isString'),
            'enabled_crowdfunding' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => TRUE),
        ),
    );
	
    public static function loadByIdProduct($id_product){
        $result = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'product_crowdfunding` sample
            WHERE sample.`id_product` = '.(int)$id_product
        );
        return new Belvg_Sample($result['id_belvg_samplemodule']);
    }
	

}

