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
 * Class CoinSlider
 *
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud
 * @package    Controller
 */
class CoinSlider extends \Frontend
{
    /**
     * Built the image slider Coin-Slider
     *
     * @param \Database|object         $database
     * @param string                   $select_coinSlider
     * @param \FrontendTemplate|object $objTemplate
     */
    public function builtImageSlider(\Database $database, $select_coinSlider, \FrontendTemplate $template)
    {
        $objSlider = $database->prepare("SELECT * FROM tl_coinSlider WHERE id=? AND published=1")
            ->limit(1)
            ->execute($select_coinSlider);

        if ($objSlider->numRows > 0) {
            while ($objSlider->next()) {
                $arrSlider[] = $objSlider->row();
            }
            $preferences = array_values($arrSlider);
            $template->preferences = $preferences;

            // Retrieve the current slideshow pictures
            $objPictures = $database->prepare("SELECT * FROM tl_coinPictures WHERE pid=? AND published=1 ORDER BY sorting")
                ->execute($select_coinSlider);

            if ($objPictures->numRows > 0) {
                while ($objPictures->next()) {
                    $imgSize = deserialize($objPictures->size);
                    $objFile = \FilesModel::findByUuid($objPictures->singleSRC);
                    $srcImage = \Image::get($this->urlEncode($objFile->path), $imgSize[0], $imgSize[1], $imgSize[2]);
                    $arrPictures[$objPictures->id] = array(
                        'description' => $objPictures->description,
                        'alt'         => $objPictures->alt,
                        'imageUrl'    => $objPictures->imageUrl,
                        'singleSRC'   => $srcImage,
                        'name'        => $objPictures->name
                    );
                }

                $pictures = array_values($arrPictures);
                $template->pictures = $pictures;
            }
        }
    }
}
