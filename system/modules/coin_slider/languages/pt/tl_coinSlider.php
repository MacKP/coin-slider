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
$GLOBALS['TL_LANG']['tl_coinSlider']['title'] = array ('Título', 'Queiram por favor inserir um título.');
$GLOBALS['TL_LANG']['tl_coinSlider']['alias'] = array ('Pseudónimo', 'Este pseudónimo é uma referência única para o Canto Slider. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['width'] = array ('Amplitude', 'Amplitude do slider. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['height'] = array ('Altura', 'Altura do slider. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['spw'] = array ('Quadrados por amplitude', 'Nombre de quadrada em amplitude. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['sph'] = array ('Quadrados por altura', 'Nombre de quadrada em altura. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['delay'] = array ('Prazo', 'Prazo entre as imagens em milissegundo. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['sDelay'] = array ('Prazo entre os quadrados', 'Definir o prazo entre os quadrados em milissegundo.');
$GLOBALS['TL_LANG']['tl_coinSlider']['opacity'] = array ('Opacidade', 'Opacidade do título e a navegação. Valor entre 0 e 1. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['titleSpeed'] = array ('Velocidade de aparência do título', 'Definir a velocidade de aparência do título em milissegundo. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['effect'] = array ('Efeito', 'Todos os efeitos ou aleatório, turbilhão, chuva, direito. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['navigation'] = array ('Navegação', 'Precedente, seguinte e botões. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['links'] = array ('Relações', 'Ver as imagens como relação. ');
$GLOBALS['TL_LANG']['tl_coinSlider']['hoverPause'] = array ('Pausa ao sobrevoo', 'O diaporama para ao sobrevoo do cursor.');
$GLOBALS['TL_LANG']['tl_coinSlider']['published'] = array ('Publicar o diaporama', 'Tornar o diaporama visível sobre o sítio Internet. ');

/**
 * Reference.
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['all'] = 'todos os efeitos';
$GLOBALS['TL_LANG']['tl_coinSlider']['random'] = 'aleatório';
$GLOBALS['TL_LANG']['tl_coinSlider']['swirl'] = 'turbilhão';
$GLOBALS['TL_LANG']['tl_coinSlider']['rain'] = 'chuva';
$GLOBALS['TL_LANG']['tl_coinSlider']['straight'] = 'direito';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['preferences_legend'] = 'Preferências';
$GLOBALS['TL_LANG']['tl_coinSlider']['publish_legend'] = 'Publicar';
$GLOBALS['TL_LANG']['tl_coinSlider']['title_legend'] = 'Título e pseudónimo';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_coinSlider']['new'] = array ('Novo diaporama', 'Criar um novo diaporama');
$GLOBALS['TL_LANG']['tl_coinSlider']['edit'] = array ('Editar as imagens deste diaporama', 'Editar as imagens do diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['editheader'] = array ('Editar este diaporama', 'Editar este diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['copy'] = array ('Duplicar este diaporama', 'Duplicar este diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['delete'] = array ('Suprimir este diaporama', 'Suprimir este diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['toggle'] = array ('Publicar/Retirar este diaporama', 'Publicar/Retirar este diaporama ID %s');
$GLOBALS['TL_LANG']['tl_coinSlider']['show'] = array ('Detalhe do diaporama', 'Afixar os detalhes deste diaporama ID %s');

/**
 * Labels
 */

$GLOBALS['TL_LANG']['tl_coinSlider']['pictures'] = 'imagens';
?>