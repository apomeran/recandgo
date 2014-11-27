{*
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
 *}

<!-- Belvg_SampleModule -->
<input type="hidden" name="submitted_tabs[]" value="belvg_samplemodule" />
	<h4>{l s='Descripcion Crowdfunding' mod='belvg_samplemodule'}</h4>
	<div class="separation"></div>
	<fieldset style="border:none;">
	   <input type="checkbox" name="enabled_crowdfunding" {if isset($belvg_enabled_crowdfunding) && $belvg_enabled_crowdfunding} checked {/if}>Habilitar producto para CrowdFunding</input>
       
        
    </fieldset>
<div class="separation"></div>
<div class="clear">&nbsp;</div>
<div class="panel-footer">
		<a href="{$link->getAdminLink('AdminProducts')|escape:'html':'UTF-8'}" class="btn btn-default"><i class="process-icon-cancel"></i> {l s='Cancel'}</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> {l s='Save'}</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> {l s='Save and stay'}</button>
	</div>
<!-- /Belvg_SampleModule -->
