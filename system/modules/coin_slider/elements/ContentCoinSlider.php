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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


/**
 * Class ContentCoinSlider
 *
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud
 * @package    Controller
 */
class ContentCoinSlider extends \ContentElement {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'coinSlider';

    public function generate() {

        if (TL_MODE == 'FE') {

            $GLOBALS['TL_CSS'][] = 'system/modules/coin_slider/assets/css/coin-slider-styles.css';
        
            if (version_compare(VERSION, '3', '>=')) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/coin_slider/assets/js/coin-slider.js|static';
            }
            else {
                $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/coin_slider/assets/js/coin-slider.js';
            }
        }
        return parent::generate();
    }

    /**
     * Generate module
     */
    protected function compile() {
        $this->Template = new \FrontendTemplate('coinSlider');
        $this->import('Database');
        $coinSlider = new CoinSlider();
        $coinSlider->compileListPicturesTemplate($this->Database,$this->select_coinSlider, $this->Template);
    }
}
?>