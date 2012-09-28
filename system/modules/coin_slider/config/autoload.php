<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Coin_slider
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\CoinSlider'        => 'system/modules/coin_slider/classes/CoinSlider.php',

	// Modules
	'Contao\ContentCoinSlider' => 'system/modules/coin_slider/modules/ContentCoinSlider.php',
	'Contao\ModuleCoinSlider'  => 'system/modules/coin_slider/modules/ModuleCoinSlider.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'coinSlider' => 'system/modules/coin_slider/templates',
));
