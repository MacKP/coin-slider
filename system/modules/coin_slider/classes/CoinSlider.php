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
 * Class CoinSlider
 *
 * @copyright  Lionel Maccaud
 * @author     Lionel Maccaud
 * @package    Controller
 */
class CoinSlider extends \Frontend {

    /**
     * Compiles the data for the list template
     *
     * @access public
     * @return null
     */
    public function compileListPicturesTemplate($database, $select_coinSlider, $template) {

        // Test if the slideshow has pictures
        $ifPictures = true;

        $objSlider = $database->prepare("SELECT * FROM tl_coinSlider WHERE id=? AND published=1")
                ->limit(1)
                ->execute($select_coinSlider);

        // Retrieve the current slideshow pictures
        $objPictures = $database->prepare("SELECT * FROM tl_coinPictures WHERE pid=? AND published=1 ORDER BY sorting")
                ->execute($select_coinSlider);

        if ($objSlider->numRows > 0) {
            while ($objSlider->next()) {
                $arrSlider[] = $objSlider->row();
            }
            $preferences = array_values($arrSlider);
            $template->preferences = $preferences;
        }

        if ($objPictures->numRows > 0) {
            while ($objPictures->next()) {
                $imgSize = deserialize($objPictures->size);
                $objFile = \FilesModel::findByPk($objPictures->singleSRC);
                $srcImage = \Image::get($this->urlEncode($objFile->path), $imgSize[0], $imgSize[1], $imgSize[2]);
                $arrPictures[$objPictures->id] = array(
                    'description' => $objPictures->description,
                    'alt' => $objPictures->alt,
                    'imageUrl' => $objPictures->imageUrl,
                    'singleSRC' => $srcImage
                );
            }

            $pictures = array_values($arrPictures);
            $template->pictures = $pictures;
            $template->ifPictures = $ifPictures;
        } else {
            $ifPictures = false;
            $template->ifPictures = $ifPictures;
        }
    }
}
?>