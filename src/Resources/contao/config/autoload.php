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
    'LionelM\CoinSlider\CoinSlider'        => 'vendor/LionelM/CoinSliderBundle/src/Resources/contao/classes/CoinSlider.php',

    // Elements
    'LionelM\CoinSlider\ContentCoinSlider' => 'vendor/LionelM/CoinSliderBundle/src/Resources/contao/elements/ContentCoinSlider.php',

    // Models
    'LionelM\CoinSlider\CoinPicturesModel' => 'vendor/LionelM/CoinSliderBundle/src/Resources/contao/models/CoinPicturesModel.php',
    'LionelM\CoinSlider\CoinSliderModel'   => 'vendor/LionelM/CoinSliderBundle/src/Resources/contao/models/CoinSliderModel.php',

    // Modules
    'LionelM\CoinSlider\ModuleCoinSlider'  => 'vendor/LionelM/CoinSliderBundle/src/Resources/contao/modules/ModuleCoinSlider.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'coinSlider' => 'vendor/LionelM/CoinSliderBundle/src/Resources/contao/templates',
));
