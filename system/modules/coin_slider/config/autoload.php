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
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'Contao\CoinSlider'        => 'system/modules/coin_slider/classes/CoinSlider.php',

    // Elements
    'Contao\ContentCoinSlider' => 'system/modules/coin_slider/elements/ContentCoinSlider.php',

    // Models
    'Contao\CoinPicturesModel' => 'system/modules/coin_slider/models/CoinPicturesModel.php',
    'Contao\CoinSliderModel'   => 'system/modules/coin_slider/models/CoinSliderModel.php',

    // Modules
    'Contao\ModuleCoinSlider'  => 'system/modules/coin_slider/modules/ModuleCoinSlider.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'coinSlider' => 'system/modules/coin_slider/templates',
));
