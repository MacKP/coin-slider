<?php

/**
 * Coin Slider
 * jQuery Image Slider for Contao
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   coinSlider
 * @license   MIT
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
                $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/coin_slider/assets/js/coin-slider.min.js|static';
            }
            else {
                $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/coin_slider/assets/js/coin-slider.min.js';
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