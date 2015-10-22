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

use Contao\CoreBundle\ContaoCoreBundle;

/**
 * Class ContentCoinSlider
 *
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud
 * @package    Controller
 */
class ContentCoinSlider extends \ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'coinSlider';

    public function generate()
    {
        $isFrontEnd = System::getContainer()->isScopeActive(ContaoCoreBundle::SCOPE_FRONTEND);

        if ($isFrontEnd) {
            $GLOBALS['TL_CSS'][] = 'web/bundles/lionelmcoinslider/css/coin-slider-styles.css||static';
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
