<?php

if (!defined('TL_ROOT'))
    die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Coin Slider by Ivan Lazarevic &#40;http://workshop.rs&#41;
 * @author     Lionel Maccaud, David Imboden
 * @package    coinSlider 
 * @license    MIT 
 * @filesource
 */

/**
 * Class tl_coinSlider
 *
 * @copyright  Lionel Maccaud &#40;http://www.synergie-consulting.com&#41;
 * @author     Lionel Maccaud &#40;http://www.synergie-consulting.com&#41; 
 * @package    Controller
 */
class tl_coinSlider extends Module {

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
            $objTemplate = new BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### MODULE COIN SLIDER ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

       if (TL_MODE == 'FE') {

            $GLOBALS['TL_CSS'][] = 'system/modules/coin_slider/html/css/coin-slider-styles.css';
            
            $coinSlider = new coinSlider();
            if(!$coinSlider->ifJQuery())
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/coin_slider/html/js/jquery-1.4.1.min.js';
            
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/coin_slider/html/js/coin-slider.min.js';
        }

        return parent::generate();
    }

    /**
     * Generate module
     */
    protected function compile() {
        $this->Template = new FrontendTemplate('coinSlider');
        $this->import('Database');
        $coinSlider = new coinSlider();
        $coinSlider->compileListPicturesTemplate($this->Database,$this->select_coinSlider, $this->Template);
    }
}
?>