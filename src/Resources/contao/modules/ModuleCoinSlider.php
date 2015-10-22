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
 * Run in a custom namespace, so the class can be replaced
 */
namespace LionelM\CoinSliderBundle;

/**
 * Class ModuleCoinSlider
 *
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud
 * @package    Controller
 */
class ModuleCoinSlider extends \Module
{
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
    public function generate()
    {
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
            $GLOBALS['TL_CSS'][] = 'web/bundles/lionelmcoinslider/css/coin-slider-styles.css|static';
            $GLOBALS['TL_JAVASCRIPT'][] = 'web/bundles/lionelmcoinslider/js/coin-slider.min.js|static';
        }
        return parent::generate();
    }

    /**
     * Generate module
     */
    protected function compile()
    {
        $this->Template = new \FrontendTemplate('coinSlider');
        $this->import('Database');
        $coinSlider = new CoinSlider();
        $coinSlider->compileListPicturesTemplate($this->Database,$this->select_coinSlider, $this->Template);
    }
}
