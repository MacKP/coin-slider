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
$GLOBALS['TL_LANG']['tl_coinPictures']['name']        = array('Název', 'Prosím, zvolte název obrázku.');
$GLOBALS['TL_LANG']['tl_coinPictures']['singleSRC']   = array('Zdrojový soubor', 'Prosím, vyberte soubor z adresáře souborů.');
$GLOBALS['TL_LANG']['tl_coinPictures']['alt']         = array('Alternativní text', 'V zájmu toho udělat obrázek nebo video přístupný můžete poskytnout alternativní text s krátkým popisem jejich obsahu.');
$GLOBALS['TL_LANG']['tl_coinPictures']['imageUrl']    = array('Použít obrázek jako odkaz', 'Přidružit odkaz s obrázkem. Je nutné aktivovat volbu "odkazy" v nastavení prezentace obrázků. Pro externí odkazy, nezapomeňte "http://".');
$GLOBALS['TL_LANG']['tl_coinPictures']['published']   = array('Publikovat obrázek', 'Tímto se daný obrázek zveřejní.');
$GLOBALS['TL_LANG']['tl_coinPictures']['size']        = array('Šířka a výška obrázku', 'Zde můžete nastavit rozměry obrázku a velikost režimu.');
$GLOBALS['TL_LANG']['tl_coinPictures']['description'] = array('Popis obrázku', 'Zde můžete zadat krátký text, který se zobrazí pod obrázkem.');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['picture_legend']  = 'Obrázek';
$GLOBALS['TL_LANG']['tl_coinPictures']['name_legend']     = 'Název';
$GLOBALS['TL_LANG']['tl_coinPictures']['publish_legend']  = 'Publikovat';


/**
 * Legends
 */


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['new']    = array('Nový obrázek', 'Vytvořit nový obrázek');
$GLOBALS['TL_LANG']['tl_coinPictures']['edit']   = array('Upravit obrázek', 'Upravit obrázek ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['copy']   = array('Duplikovat obrázek', 'Duplikovat obrázek ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['delete'] = array('Odstranit obrázek', 'Odstranit obrázek ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['toggle'] = array('Publikovat / nepublikovat obrázek', 'Publikovat / nepublikovat obrázek ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['show']   = array('Podrobnosti obrázku', 'Zobrazit podrobnosti obrázku ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['cut']    = array('Přesunout obrázek', 'Přesunout obrázek ID %s.');

/**
 * miscellaneous
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['descriptionBE'] = 'Popis:';
?>