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
        $isBackEnd  = \System::getContainer()->isScopeActive(ContaoCoreBundle::SCOPE_BACKEND);
        $isFrontEnd = \System::getContainer()->isScopeActive(ContaoCoreBundle::SCOPE_FRONTEND);

        if ($isBackEnd) {
            /** @var \BackendTemplate|object $objTemplate */
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### MODULE COIN SLIDER ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

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
        $coinSlider->builtImageSlider($this->Database, $this->select_coinSlider, $this->Template);
    }
}
