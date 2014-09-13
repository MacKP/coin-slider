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
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['coinSlider'] = '{title_legend},name,type,headline;{select_coinSlider_legend},select_coinSlider;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['select_coinSlider'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['select_coinSlider'],
    'exclude'                 => true,
    'inputType'               => 'radio',
    'foreignKey'              => 'tl_coinSlider.title',
    'eval'                    => array('mandatory'=>true)
);
