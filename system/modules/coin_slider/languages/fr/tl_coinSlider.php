<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Coin Slider
 * jQuery Image Slider for Contao
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   coinSlider
 * @license   MIT
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['title']                         = array('Titre', 'Veuillez s\'il vous plaît insérer un titre.');
$GLOBALS['TL_LANG']['tl_coinSlider']['alias']                         = array('Alias', 'Cet alias est une référence unique pour le Coin Slider.');
$GLOBALS['TL_LANG']['tl_coinSlider']['width']                         = array('Largeur', 'Largeur du slider.');
$GLOBALS['TL_LANG']['tl_coinSlider']['height']                        = array('Hauteur', 'Hauteur du slider.');
$GLOBALS['TL_LANG']['tl_coinSlider']['spw']                           = array('Carrés par largeur', 'Nombre de carrés en largeur.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sph']                           = array('Carrés par hauteur', 'Nombre de carrés en hauteur.');
$GLOBALS['TL_LANG']['tl_coinSlider']['delay']                         = array('Délai', 'Délai entre les images en ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['sDelay']                        = array('Délai entre les carrés', 'Définir le délai entre les carrés en ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['opacity']                       = array('Opacité', 'Opacité du titre et de la navigation. Valeur entre 0 et 1.');
$GLOBALS['TL_LANG']['tl_coinSlider']['titleSpeed']                    = array('Vitesse d\'apparence du titre', 'Définir la vitesse d\'apparence du titre en ms.');
$GLOBALS['TL_LANG']['tl_coinSlider']['effect']                        = array('Effet', 'Tous les effets ou aléatoire, tourbillon, pluie, droit.');
$GLOBALS['TL_LANG']['tl_coinSlider']['navigation']                    = array('Navigation', 'Navigation de type texte (précédent, suivant) et/ou carrés.');
$GLOBALS['TL_LANG']['tl_coinSlider']['links']                         = array('Liens', 'Voir les images en tant que lien.');
$GLOBALS['TL_LANG']['tl_coinSlider']['hoverPause']                    = array('Pause au survol', 'Le diaporama stoppe au survol de la souris.');
$GLOBALS['TL_LANG']['tl_coinSlider']['published']                     = array('Publier le diaporama', 'Rendre le diaporama visible sur le site Internet.');
$GLOBALS['TL_LANG']['tl_coinSlider']['prevText']                      = array('Précédent', 'Texte pour le bouton précédent.');
$GLOBALS['TL_LANG']['tl_coinSlider']['nextText']                      = array('Suivant', 'Texte pour le bouton suivant.');
$GLOBALS['TL_LANG']['tl_coinSlider']['showNavigationPrevNext']        = array('Afficher la navigation de type texte (précédent et suivant)', 'Afficher la navigation de type texte (précédent et suivant).');
$GLOBALS['TL_LANG']['tl_coinSlider']['showNavigationButtons']         = array('Afficher la navigation de type carrés', 'Afficher la navigation de type carrés.');
$GLOBALS['TL_LANG']['tl_coinSlider']['navigationPrevNextAlwaysShown'] = array('Précédent et suivant sont toujours visibles', 'Précédent et suivant sont toujours visibles.');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['all']      = 'Tous les effets';
$GLOBALS['TL_LANG']['tl_coinSlider']['random']   = 'aléatoire';
$GLOBALS['TL_LANG']['tl_coinSlider']['swirl']    = 'tourbillon';
$GLOBALS['TL_LANG']['tl_coinSlider']['rain']     = 'pluie';
$GLOBALS['TL_LANG']['tl_coinSlider']['straight'] = 'droit';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['preferences_legend'] = 'Préférences';
$GLOBALS['TL_LANG']['tl_coinSlider']['publish_legend']     = 'Publier';
$GLOBALS['TL_LANG']['tl_coinSlider']['title_legend']       = 'Titre et alias';
$GLOBALS['TL_LANG']['tl_coinSlider']['nav_legend']         = 'Navigation';
$GLOBALS['TL_LANG']['tl_coinSlider']['size_legend']        = 'Largeur et hauteur';
$GLOBALS['TL_LANG']['tl_coinSlider']['behavior_legend']    = 'Comportement';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['new']        = array('Nouveau diaporama', 'Créer un nouveau diaporama');
$GLOBALS['TL_LANG']['tl_coinSlider']['edit']       = array('Éditer les images du diaporama', 'Éditer les images du diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['editheader'] = array('Éditer le diaporama', 'Éditer le diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['copy']       = array('Dupliquer le diaporama', 'Dupliquer le diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['delete']     = array('Supprimer le diaporama', 'Supprimer le diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['toggle']     = array('Publier/Dépublier le diaporama', 'Publier/Dépublier le diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['show']       = array('Détails du diaporama', 'Afficher les détails du diaporama ID %s');

/**
 * Labels
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['pictures'] = 'images';
?>