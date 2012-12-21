<?php

/**
 * Coin Slider
 * jQuery Image Slider for Contao
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   coinSlider
 * @license   MIT (http://lionel-m.mit-license.org/)
 */

/**
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['coinSlider'] = '{type_legend},type,headline;{select_coinSlider_legend},select_coinSlider;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_content
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