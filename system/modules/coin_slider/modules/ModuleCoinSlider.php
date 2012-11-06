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
 * Class ModuleCoinSlider
 *
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud
 * @package    Controller
 */
class ModuleCoinSlider extends \Module {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'coinSlider';

    /**
     * Display a wildcard in the back end
     *
     * @access public
     * @return string
     */
    public function generate() {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### MODULE COIN SLIDER ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

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