<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['name']        = array('Nom', 'Nom de l\'image.');
$GLOBALS['TL_LANG']['tl_coinPictures']['singleSRC']   = array('Fichier source', 'Sélectionner un fichier à partir de l\'explorateur de fichiers.');
$GLOBALS['TL_LANG']['tl_coinPictures']['alt']         = array('Texte alternatif', 'Un site internet accessible doit toujours fournir un texte alternatif pour les images qui sera une courte description de leur contenu.');
$GLOBALS['TL_LANG']['tl_coinPictures']['imageUrl']    = array('Cible du lien', 'Associer une page à une image. Vous devez cocher l\'option "liens" dans les préférences du Coin Slider. Pour les liens externes, ne pas oublier: "http://".');
$GLOBALS['TL_LANG']['tl_coinPictures']['published']   = array('Publier l\'image', 'Rendre l\'image visible dans le slideshow.');
$GLOBALS['TL_LANG']['tl_coinPictures']['size']        = array('Largeur et hauteur de l\'image', 'Saisir les dimensions de l\'image et le mode de redimensionnement.');
$GLOBALS['TL_LANG']['tl_coinPictures']['description'] = array('Description de l\'image', 'Saisir un court texte qui s\'affichera au-dessous de l\'image.');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['picture_legend']  = 'Image';
$GLOBALS['TL_LANG']['tl_coinPictures']['name_legend']     = 'Nom';
$GLOBALS['TL_LANG']['tl_coinPictures']['publish_legend']  = 'Publier';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['new']    = array('Nouvelle image', 'Créer une nouvelle image');
$GLOBALS['TL_LANG']['tl_coinPictures']['edit']   = array('Éditer l\'image', 'Éditer l\'image ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['copy']   = array('Dupliquer l\'image', 'Dupliquer l\'image ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['cut']    = array('Déplacer l\'image', 'Déplacer l\'image ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['delete'] = array('Supprimer l\'image', 'Supprimer l\'image ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['toggle'] = array('Publier/Dépublier l\'image', 'Publier/Dépublier l\'image ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['show']   = array('Détails de l\'image', 'Afficher les détails de l\'image ID %s');


/**
 * miscellaneous
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['descriptionBE'] = 'Description:';
?>