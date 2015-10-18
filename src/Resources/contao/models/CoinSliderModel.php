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
namespace LionelM\CoinSlider;

/**
 * Coin Slider Model
 *
 * @package   Models
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 */
class CoinSliderModel extends \Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_coinSlider';
}
