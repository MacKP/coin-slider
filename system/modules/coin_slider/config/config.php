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
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
$GLOBALS['BE_MOD']['content']['coinSlider'] = array (
    
    'icon'       => 'system/modules/coin_slider/assets/images/image-sunset.png',
    'tables'     => array('tl_coinSlider', 'tl_coinPictures')
);

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */
array_insert($GLOBALS['FE_MOD']['application'], 0, array (

    'coinSlider' => 'ModuleCoinSlider'
));

/**
 * -------------------------------------------------------------------------
 * CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_CTE']['media']['coinSlider'] = 'ContentCoinSlider';
?>