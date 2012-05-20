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
 * @author     Lionel Maccaud, David Imboden
 * @package    coinSlider 
 * @license    MIT 
 * @filesource
 */



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['title'] = array('Titel', 'Bitte den Titel der Diashow eingeben.');
$GLOBALS['TL_LANG']['tl_coinSlider']['alias'] = array('Alias', 'Der Alias ist eine eindeutige Referenz auf den Coin-Slider und kann anstatt der ID benutzt werden.');
$GLOBALS['TL_LANG']['tl_coinSlider']['width'] = array('Breite', 'Breite der Diashow.');
$GLOBALS['TL_LANG']['tl_coinSlider']['height'] = array('Höhe', 'Höhe der Diashow.');
$GLOBALS['TL_LANG']['tl_coinSlider']['spw'] = array('Quadrate horizontal', 'Anzahl der waagerecht animierten Quadrate.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sph'] = array('Quadrate vertikal', 'Anzahl der senkrecht animierten Quadrate.');
$GLOBALS['TL_LANG']['tl_coinSlider']['delay'] = array('Anzeigedauer je Bild', 'Zeit in ms wie lange jedes einzelne Bild angezeigt wird.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sDelay'] = array('Animationsdauer', 'Zeit in ms für die Animation eines Quadrates.');
$GLOBALS['TL_LANG']['tl_coinSlider']['opacity'] = array('Deckkraft', 'Deckkraft von Titel und Navigation. Werte zwischen 0 und 1. z.B. .7');
$GLOBALS['TL_LANG']['tl_coinSlider']['titleSpeed'] = array('Titel-Animation', 'Dauer der Einblend-Animation für den Titel in ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['effect'] = array('Effekte', 'Alle Effekte = zufälliger Effekt, random = zufälliger Aufbau, swirl = Spiral-Effekt, rain = Diagonal-Effekt, straight = Horizontal-Effekt.');
$GLOBALS['TL_LANG']['tl_coinSlider']['navigation'] = array('Navigation', '"Zurück", "Weiter" und andere Buttons.');
$GLOBALS['TL_LANG']['tl_coinSlider']['links'] = array('Links', 'Bilder verlinken.');
$GLOBALS['TL_LANG']['tl_coinSlider']['hoverPause'] = array('Pause bei Hover', 'Animation anhalten, wenn sich der Mauszeiger über dem Bild befindet.');
$GLOBALS['TL_LANG']['tl_coinSlider']['published']   = array('Veröffentlichen', 'Die Diashow auf der Website veröffentlichen (sichtbar schalten).');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['all'] = 'Alle Effekte';
$GLOBALS['TL_LANG']['tl_coinSlider']['random'] = 'random';
$GLOBALS['TL_LANG']['tl_coinSlider']['swirl'] = 'swirl';
$GLOBALS['TL_LANG']['tl_coinSlider']['rain'] = 'rain';
$GLOBALS['TL_LANG']['tl_coinSlider']['straight'] = 'straight';


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['preferences_legend'] = 'Eigenschaften';
$GLOBALS['TL_LANG']['tl_coinSlider']['publish_legend']   = 'Veröffentlichung';
$GLOBALS['TL_LANG']['tl_coinSlider']['title_legend']   = 'Titel und Alias';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['new']    = array('Neuer Coin-Slider', 'Erzeugt eine neue Diashow');
$GLOBALS['TL_LANG']['tl_coinSlider']['edit']   = array('Bearbeite Coin-Slider Bilder', 'Bearbeiten Sie die Bilder der Diashow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['editheader']   = array('Bearbeite Coin-Slider', 'Bearbeiten Sie die Diashow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['copy']   = array('Dupliziere Coin-Slider', 'Erstellt eine Kopie von Diashow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['delete'] = array('Lösche Coin-Slider', 'Löscht die Diashow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['toggle'] = array('Veröffentl./Unveröffentl. Coin-Slider', 'Veröffentlicht/Unveröffentlicht die Diashow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['show']   = array('Coin-Slider Details', 'Zeige Details von Diashow ID %s');


/**
 * Labels
 */

$GLOBALS['TL_LANG']['tl_coinSlider']['pictures'] = 'Bilder';
?>
