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
	<h4>{l s='Belvg Sample Module' mod='belvg_samplemodule'}</h4>
	<div class="separation"></div>
	<fieldset style="border:none;">
        <textarea name="belvg_sample" rows="10" cols="45">{if isset($belvg_textarea)}{$belvg_textarea}{/if}</textarea>
        <input type="checkbox" name="enabled_crowdfunding" {if isset($belvg_enabled_crowdfunding) && $belvg_enabled_crowdfunding} checked {/if}>Habilitar CrowdFunding</input>
    </fieldset>
<div class="separation"></div>
<div class="clear">&nbsp;</div>
<!-- /Belvg_SampleModule -->
