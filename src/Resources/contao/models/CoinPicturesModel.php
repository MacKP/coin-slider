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
 * Coin Slider pictures Model
 *
 * @package   Models
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 */
class CoinPicturesModel extends \Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_coinPictures';
}
