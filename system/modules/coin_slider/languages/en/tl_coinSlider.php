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
 * @author     Lionel Maccaud, David Imboden &#40;http://www.synergie-consulting.com&#41; 
 * @package    coinSlider 
 * @license    MIT 
 * @filesource
 */



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['title'] = array('Title', 'Please enter the slideshow title.');
$GLOBALS['TL_LANG']['tl_coinSlider']['alias'] = array('Alias', 'This alias is a unique reference to the Coin Slider which can be called instead of its numeric ID.');
$GLOBALS['TL_LANG']['tl_coinSlider']['width'] = array('Width', 'width of slider panel.');
$GLOBALS['TL_LANG']['tl_coinSlider']['height'] = array('Height', 'height of slider panel.');
$GLOBALS['TL_LANG']['tl_coinSlider']['spw'] = array('Squares per width', 'Number of squares per width.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sph'] = array('Squares per height', 'Number of squares per height.');
$GLOBALS['TL_LANG']['tl_coinSlider']['delay'] = array('Delay', 'delay between images in ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sDelay'] = array('Delay beetwen squares', 'delay beetwen squares in ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['opacity'] = array('Opacity', 'opacity of title and navigation. Value between 0 and 1.');
$GLOBALS['TL_LANG']['tl_coinSlider']['titleSpeed'] = array('Speed of title appearance', 'speed of title appearance in ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['effect'] = array('Effect', 'All effects or random, swirl, rain, straight.');
$GLOBALS['TL_LANG']['tl_coinSlider']['navigation'] = array('Navigation', 'prev next and buttons.');
$GLOBALS['TL_LANG']['tl_coinSlider']['links'] = array('Links', 'show images as links.');
$GLOBALS['TL_LANG']['tl_coinSlider']['hoverPause'] = array('Pause on hover', 'pause on hover.');
$GLOBALS['TL_LANG']['tl_coinSlider']['published']   = array('Publish slideshow', 'Make the slideshow visible on the website.');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['all'] = 'All effects';
$GLOBALS['TL_LANG']['tl_coinSlider']['random'] = 'random';
$GLOBALS['TL_LANG']['tl_coinSlider']['swirl'] = 'swirl';
$GLOBALS['TL_LANG']['tl_coinSlider']['rain'] = 'rain';
$GLOBALS['TL_LANG']['tl_coinSlider']['straight'] = 'straight';


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['preferences_legend'] = 'Preferences';
$GLOBALS['TL_LANG']['tl_coinSlider']['publish_legend']   = 'Publish';
$GLOBALS['TL_LANG']['tl_coinSlider']['title_legend']   = 'Title and alias';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['new']    = array('New slideshow', 'Create a new slideshow');
$GLOBALS['TL_LANG']['tl_coinSlider']['edit']   = array('Edit slideshow pictures', 'Edit pictures of this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['editheader']   = array('Edit slideshow', 'Edit this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['copy']   = array('Duplicate slideshow', 'Duplicate this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['delete'] = array('Delete slideshow', 'Delete this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['toggle'] = array('Publish/unpublish slideshow', 'Publish/unpublish this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['show']   = array('Coin Slider details', 'Show the details of this slideshow ID %s');


/**
 * Labels
 */

$GLOBALS['TL_LANG']['tl_coinSlider']['pictures'] = 'pictures';
?>