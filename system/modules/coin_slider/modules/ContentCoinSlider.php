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


include_once 'classes/CoinSlider.php';


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
            
            $coinSlider = new CoinSlider();
            if(!$coinSlider->ifJQuery())
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/coin_slider/assets/js/jquery-1.4.1.min.js';
            
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/coin_slider/assets/js/coin-slider.min.js';
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