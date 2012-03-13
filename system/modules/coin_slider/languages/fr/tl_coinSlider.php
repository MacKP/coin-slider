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
 * @author     Lionel Maccaud, David Imboden &#40;http://www.synergie-consulting.com&#41; 
 * @package    coinSlider 
 * @license    MIT 
 * @filesource
 */



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['title'] = array('Titre', 'Veuillez s\'il vous plaît insérer un titre.');
$GLOBALS['TL_LANG']['tl_coinSlider']['alias'] = array('Alias', 'Cet alias est une référence unique pour le Coin Slider.');
$GLOBALS['TL_LANG']['tl_coinSlider']['width'] = array('Largeur', 'Largeur du slider.');
$GLOBALS['TL_LANG']['tl_coinSlider']['height'] = array('Hauteur', 'Hauteur du slider.');
$GLOBALS['TL_LANG']['tl_coinSlider']['spw'] = array('Carrés par largeur', 'Nombre de carrés en largeur.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sph'] = array('Carrés par hauteur', 'Nombre de carrés en hauteur.');
$GLOBALS['TL_LANG']['tl_coinSlider']['delay'] = array('Délai', 'Délai entre les images en ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sDelay'] = array('Délai entre les carrés', 'Définir le délai entre les carrés en ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['opacity'] = array('Opacité', 'Opacité du titre et de la navigation. Valeur entre 0 et 1.');
$GLOBALS['TL_LANG']['tl_coinSlider']['titleSpeed'] = array('Vitesse d\'apparence du titre', 'Définir la vitesse d\'apparence du titre en ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['effect'] = array('Effet', 'Tous les effets ou aléatoire, tourbillon, pluie, droit.');
$GLOBALS['TL_LANG']['tl_coinSlider']['navigation'] = array('Navigation', 'Préc. suiv. et boutons.');
$GLOBALS['TL_LANG']['tl_coinSlider']['links'] = array('Liens', 'Voir les images en tant que lien.');
$GLOBALS['TL_LANG']['tl_coinSlider']['hoverPause'] = array('Pause au survol', 'Le diaporama stoppe au survol de la souris.');
$GLOBALS['TL_LANG']['tl_coinSlider']['published']   = array('Publier le diaporama', 'Rendre le diaporama visible sur le site Internet.');


/**
 * Reference.
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['all'] = 'Tous les effets';
$GLOBALS['TL_LANG']['tl_coinSlider']['random'] = 'aléatoire';
$GLOBALS['TL_LANG']['tl_coinSlider']['swirl'] = 'tourbillon';
$GLOBALS['TL_LANG']['tl_coinSlider']['rain'] = 'pluie';
$GLOBALS['TL_LANG']['tl_coinSlider']['straight'] = 'droit';


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['preferences_legend'] = 'Préférences';
$GLOBALS['TL_LANG']['tl_coinSlider']['publish_legend']   = 'Publier';
$GLOBALS['TL_LANG']['tl_coinSlider']['title_legend']   = 'Titre et alias';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['new']    = array('Nouveau diaporama', 'Créer un nouveau diaporama');
$GLOBALS['TL_LANG']['tl_coinSlider']['edit']   = array('Éditer les images de ce diaporama', 'Éditer les images du diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['editheader']   = array('Éditer ce diaporama', 'Éditer ce diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['copy']   = array('Dupliquer ce diaporama', 'Dupliquer ce diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['delete'] = array('Supprimer ce diaporama', 'Supprimer ce diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['toggle'] = array('Publier/Dépublier ce diaporama', 'Publier/Dépublier ce diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['show']   = array('Détail du diaporama', 'Afficher les détails de ce diaporama ID %s');


/**
 * Labels
 */

$GLOBALS['TL_LANG']['tl_coinSlider']['pictures'] = 'images';
?>