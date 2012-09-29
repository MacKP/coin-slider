<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package coinSlider
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['coinSlider'] = '{title_legend},name,type,headline;{select_coinSlider_legend},select_coinSlider;{config_legend},align,space,cssID';

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
?>