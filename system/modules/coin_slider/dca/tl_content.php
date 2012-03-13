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
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['coinSlider'] = '{type_legend},type,headline;{select_coinSlider_legend},select_coinSlider;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['select_coinSlider'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['select_coinSlider'],
	'exclude'                 => true,
	'inputType'               => 'radio',
	'foreignKey'              => 'tl_coinSlider.title',
	'eval'                    => array('mandatory'=>true)
);
?>