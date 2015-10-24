## Coin-Slider extension for the Contao CMS

[![Latest Stable Version](https://poser.pugx.org/lionel/coin-slider/v/stable)](https://packagist.org/packages/lionel/coin-slider)
[![License](https://poser.pugx.org/lionel/coin-slider/license)](https://packagist.org/packages/lionel/coin-slider)

The official website of this project is: <http://workshop.rs/projects/coin-slider/>

Contao repository : <http://contao.org/en/extension-list/view/coin-slider.html>

### Contao 4.x beta

Add `"lionel/coin-slider": "~2.0@beta"` in  the `composer.json` file.

Add `new LionelM\CoinSliderBundle\LionelMCoinSliderBundle(),` in the `app/AppKernel.php` file.

Create the symlink in `web/bundles` with `php app/console assets:install web --symlink`.

This extension use jQuery. You should modify your page layout(s) by selecting “Include jQuery”.
