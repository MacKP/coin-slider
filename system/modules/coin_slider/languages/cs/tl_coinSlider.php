<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Coin Slider by Ivan Lazarevic &#40;http://workshop.rs&#41;
 * @author     Lionel Maccaud
 * @translator Tomas Petrlik (frogzone), www.frogzone.cz
 * @package    coinSlider 
 * @license    MIT 
 * @filesource
 */



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['title'] = array('Název', 'Prosím, zvolte název.');
$GLOBALS['TL_LANG']['tl_coinSlider']['alias'] = array('Alias', 'Tento alias je unikátní odkaz na Coin Slider, který se může použít místo ID.');
$GLOBALS['TL_LANG']['tl_coinSlider']['width'] = array('Šířka', 'Šířka celého panelu (pixely).');
$GLOBALS['TL_LANG']['tl_coinSlider']['height'] = array('Výška', 'Výška celého panelu (pixely).');
$GLOBALS['TL_LANG']['tl_coinSlider']['spw'] = array('Čtverců na šířku', 'Zde definujte počet čtverců na šířku pro přechodové efekty.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sph'] = array('Čtverců na výšku', 'Zde definujte počet čtverců na výšku pro přechodové efekty.');
$GLOBALS['TL_LANG']['tl_coinSlider']['delay'] = array('Interval rotace', 'Interval rotace mezi jednotlivými obrázky. Hodnota v ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sDelay'] = array('Interval efektu výměny', 'Interval efektu výměny mezi jednotlivými obrázky. Hodnota v ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['opacity'] = array('Průhlednost', 'Průhlednost textu a navigace v obrázku. Hodnota mezi 0 a 1.');
$GLOBALS['TL_LANG']['tl_coinSlider']['titleSpeed'] = array('Rychlost náběhu textu', 'Rychlost náběhu textu v obrázku. Hodnota v ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['effect'] = array('Efekt', 'Ponechte prázdné pro náhodný výběr všech efektů. Pro náhodný výběr jednoho efektu zadejte náhodný.');
$GLOBALS['TL_LANG']['tl_coinSlider']['navigation'] = array('Navigace', 'Přidat tlačítka prev next.');
$GLOBALS['TL_LANG']['tl_coinSlider']['links'] = array('Odkazy', 'Povolit odkazy u jednotlivých obrázků.');
$GLOBALS['TL_LANG']['tl_coinSlider']['hoverPause'] = array('Pauza', 'Povolit pauzu při najetí myši na obrázek.');
$GLOBALS['TL_LANG']['tl_coinSlider']['published']   = array('Publikovat slideshow', 'Tímto se daná slideshow zveřejní.');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['all'] = 'všechny efekty';
$GLOBALS['TL_LANG']['tl_coinSlider']['random'] = 'náhodný efekt';
$GLOBALS['TL_LANG']['tl_coinSlider']['swirl'] = 'efekt vír';
$GLOBALS['TL_LANG']['tl_coinSlider']['rain'] = 'efekt déšť';
$GLOBALS['TL_LANG']['tl_coinSlider']['straight'] = 'efekt rovný';


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['preferences_legend'] = 'Nastavení';
$GLOBALS['TL_LANG']['tl_coinSlider']['publish_legend']   = 'Publikovat';
$GLOBALS['TL_LANG']['tl_coinSlider']['title_legend']   = 'Název a Alias';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['new']    = array('Nové slideshow', 'Vytvořit nové slideshow');
$GLOBALS['TL_LANG']['tl_coinSlider']['edit']   = array('Upravit slideshow obrázky', 'Upravit obrázky ze slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['editheader']   = array('Upravit slideshow', 'Upravit slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['copy']   = array('Duplikovat slideshow', 'Duplikovat slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['delete'] = array('Odstranit slideshow', 'Odstranit slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['toggle'] = array('Publikovat / nepublikovat slideshow', 'Publikovat / nepublikovat slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['show']   = array('Podrobnosti slideshow', 'Zobrazit podrobnosti slideshow ID %s');


/**
 * Labels
 */

$GLOBALS['TL_LANG']['tl_coinSlider']['pictures'] = 'obrázků';
?>