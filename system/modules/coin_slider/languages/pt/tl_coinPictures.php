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
$GLOBALS['TL_LANG']['tl_coinPictures']['name']        = array('Nome', 'Nome da imagem.');
$GLOBALS['TL_LANG']['tl_coinPictures']['singleSRC']   = array('Ficheiro', 'Selecionar um ficheiro a partir do explorador de ficheiros.');
$GLOBALS['TL_LANG']['tl_coinPictures']['alt']         = array('Texto alternativo', 'Um sítio Internet acessível deve sempre fornecer um texto alternativo para as imagens e os filmes que será uma curta descrição do seu conteúdo.');
$GLOBALS['TL_LANG']['tl_coinPictures']['imageUrl']    = array('Alvo da relação', 'Associar uma página à uma imagem. Deve assinalar a opção ”relações” nas preferências do Canto Slider. Para as relações externas, não esquecer: ”http://”.');
$GLOBALS['TL_LANG']['tl_coinPictures']['published']   = array('Publicar a imagem', 'Tornar a imagem visível no slideshow.');
$GLOBALS['TL_LANG']['tl_coinPictures']['size']        = array('Amplitude e altura da imagem', 'Apreender as dimensões da imagem e o modo de mudança de dimensão.');
$GLOBALS['TL_LANG']['tl_coinPictures']['description'] = array('Descrição da imagem','Apreender um curto texto que afixar-se-á abaixo da imagem.');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['picture_legend']  = 'Imagem';
$GLOBALS['TL_LANG']['tl_coinPictures']['name_legend']     = 'Nome';
$GLOBALS['TL_LANG']['tl_coinPictures']['publish_legend']  = 'Publicar';


/**
 * Legends
 */


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['new']    = array ('Nova imagem', 'Criar uma nova imagem');
$GLOBALS['TL_LANG']['tl_coinPictures']['edit']   = array ('Editar uma imagem', 'Editar a imagem ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['copy']   = array ('Duplicar uma imagem', 'Duplicar a imagem ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['cut']    = array ('Deslocar a imagem','Deslocar a imagem ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['delete'] = array ('Suprimir uma imagem', 'Suprimir a imagem ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['toggle'] = array ('Publicar/Retirar uma imagem', 'Publicar/Retirar a imagem ID %s');
$GLOBALS['TL_LANG']['tl_coinPictures']['show']   = array ('Detalhes da imagem', 'Afixar os detalhes da imagem ID %s');

/**
 * miscellaneous
 */
$GLOBALS['TL_LANG']['tl_coinPictures']['descriptionBE'] = 'Descrição:';
?>