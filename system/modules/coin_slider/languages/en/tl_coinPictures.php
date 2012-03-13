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
$GLOBALS['TL_LANG']['tl_coinPictures']['name']        = array('Name', 'Please enter a picture name.');
$GLOBALS['TL_LANG']['tl_coinPictures']['singleSRC']   = array('Source file', 'Please select a file from the files directory.');
$GLOBALS['TL_LANG']['tl_coinPictures']['alt']         = array('Alternate text', 'An accessible website should always provide an alternate text for images and movies with a short description of their content.');
$GLOBALS['TL_LANG']['tl_coinPictures']['imageUrl']    = array('Image link target', 'Associate a page with an image. You must activate the option “links” in the preferences of this Coin Slider. For external links, don\'t forget "http://".');
$GLOBALS['TL_LANG']['tl_coinPictures']['published']   = array('Publish picture', 'Make the picture visible on the slideshow.');
$GLOBALS['TL_LANG']['tl_coinPictures']['size']        = array('Image width and height', 'Here you can set the image dimensions and the resize mode.');
$GLOBALS['TL_LANG']['tl_coinPictures']['description'] = array('Image description', 'Here you can enter a short text that will be displayed below the image.');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['picture_legend']  = 'Picture';
$GLOBALS['TL_LANG']['tl_coinPictures']['name_legend']     = 'Name';
$GLOBALS['TL_LANG']['tl_coinPictures']['publish_legend']  = 'Publish';


/**
 * Legends
 */


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['new']    = array('New picture', 'Create a new picture');
$GLOBALS['TL_LANG']['tl_coinPictures']['edit']   = array('Edit picture', 'Edit picture ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['copy']   = array('Duplicate picture', 'Duplicate picture ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['cut']    = array('Move picture', 'Move picture ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['delete'] = array('Delete picture', 'Delete picture ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['toggle'] = array('Publish/unpublish picture', 'Publish/unpublish picture ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['show']   = array('Picture details', 'Show the details of picture ID %s');


/**
 * miscellaneous
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['descriptionBE'] = 'Description:';
?>