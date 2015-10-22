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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'LionelM',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'LionelM\CoinSliderBundle\CoinSlider'        => 'vendor/lionel/coin-slider/src/Resources/contao/classes/CoinSlider.php',

    // Elements
    'LionelM\CoinSliderBundle\ContentCoinSlider' => 'vendor/lionel/coin-slider/src/Resources/contao/elements/ContentCoinSlider.php',

    // Models
    'LionelM\CoinSliderBundle\CoinPicturesModel' => 'vendor/lionel/coin-slider/src/Resources/contao/models/CoinPicturesModel.php',
    'LionelM\CoinSliderBundle\CoinSliderModel'   => 'vendor/lionel/coin-slider/src/Resources/contao/models/CoinSliderModel.php',

    // Modules
    'LionelM\CoinSliderBundle\ModuleCoinSlider'  => 'vendor/lionel/coin-slider/src/Resources/contao/modules/ModuleCoinSlider.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'coinSlider' => 'vendor/lionel/coin-slider/src/Resources/contao/templates',
));
