## Coin-Slider bundle for the [Contao CMS](https://contao.org/en)

[![Latest Stable Version](https://poser.pugx.org/lionel/coin-slider/v/stable)](https://packagist.org/packages/lionel/coin-slider)
[![License](https://poser.pugx.org/lionel/coin-slider/license)](https://packagist.org/packages/lionel/coin-slider)

The official website of the Coin-Slider project is: <http://workshop.rs/projects/coin-slider/>


### Installation

Add `"lionel/coin-slider": "~2.0@beta"` in the `composer.json` file.

Add `new LionelM\CoinSliderBundle\LionelMCoinSliderBundle(),` in the `app/AppKernel.php` file.

Create the symlink in `web/bundles` with `php app/console assets:install web --symlink`.

This extension use jQuery. You should modify your page layout(s) by selecting “Include jQuery”.
