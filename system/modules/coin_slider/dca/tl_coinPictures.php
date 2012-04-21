<?php

if (!defined('TL_ROOT'))
    die('You can not access this file directly!');

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
 * Table tl_coinPictures
 */
$GLOBALS['TL_DCA']['tl_coinPictures'] = array
    (
    // Config
    'config' => array
        (
        'dataContainer'        => 'Table',
        'enableVersioning'     => true,
        'ptable'               => 'tl_coinSlider',
    ),
    // List
    'list' => array
        (
        'sorting' => array
            (
            'mode' => 4,
            'fields' => array('sorting'),
            'filter' => true,
            'flag' => 11,
            'panelLayout' => 'search,limit',
            'headerFields' => array('title', 'width', 'height', 'spw', 'sph', 'delay', 'sDelay', 'opacity', 'titleSpeed', 'effect', 'navigation', 'links', 'hoverPause', 'published'),
            'child_record_callback' => array('tl_coinPictures', 'listPictures')
        ),
        'global_operations' => array
            (
            'all' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'            => 'act=select',
                'class'           => 'header_edit_all',
                'attributes'      => 'onclick="Backend.getScrollOffset();" accesskey="e"'
            )
        ),
        'operations' => array
            (
            'edit' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_coinPictures']['edit'],
                'href'            => 'act=edit',
                'icon'            => 'edit.gif'
            ),
            'copy' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_coinPictures']['copy'],
                'href'            => 'act=copy',
                'icon'            => 'copy.gif'
            ),
            'cut' => array
            (
                'label'           => &$GLOBALS['TL_LANG']['tl_coinPictures']['cut'],
                'href'            => 'act=paste&amp;mode=cut',
                'icon'            => 'cut.gif'
            ),
            'delete' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_coinPictures']['delete'],
                'href'            => 'act=delete',
                'icon'            => 'delete.gif',
                'attributes'      => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'toggle' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_coinPictures']['toggle'],
                'icon'            => 'visible.gif',
                'attributes'      => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
                'button_callback' => array('tl_coinPictures', 'toggleIcon')
            ),
            'show' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_coinPictures']['show'],
                'href'            => 'act=show',
                'icon'            => 'show.gif'
            )
        )
    ),
    // Palettes
    'palettes' => array
        (
        '__selector__' => array(''),
        'default' => '{name_legend},name;{picture_legend},singleSRC,description,alt,imageUrl,size;{publish_legend},published'
    ),
    // Subpalettes
    'subpalettes' => array
        (
        '' => ''
    ),
    // Fields
    'fields' => array
        (
        'name' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_coinPictures']['name'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50')
        ),
        'description' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_coinPictures']['description'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'textarea',
            'eval'                    => array('rte'=>'tinyMCE', 'helpwizard'=>true),
            'explanation'             => 'insertTags'
        ),
        'singleSRC' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_coinPictures']['singleSRC'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('fieldType' => 'radio', 'files' => true, 'filesOnly' => true, 'mandatory' => true)
        ),
        'size' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_coinPictures']['size'],
            'exclude'                 => true,
            'inputType'               => 'imageSize',
            'options'                 => (version_compare(VERSION.'.'.BUILD, '2.11.0', '>=') ? $GLOBALS['TL_CROP'] : array('crop', 'proportional', 'box')),
            'reference'               => &$GLOBALS['TL_LANG']['MSC'],
            'eval'                    => array('rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
        ),
        'alt' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_coinPictures']['alt'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength' => 255, 'tl_class' => 'w50')
        ),
        'imageUrl' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_coinPictures']['imageUrl'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
            'wizard' => array
            (
                    array('tl_coinPictures', 'pagePicker')
            )
        ),
        'published' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_coinPictures']['published'],
            'exclude'                 => true,
            'filter'                  => true,
            'flag'                    => 2,
            'inputType'               => 'checkbox',
            'eval'                    => array('doNotCopy' => true, 'tl_class' => 'w50 m12')
        )
    )
);

/**
 * Class tl_coinPictures
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @package Controller
 */
class tl_coinPictures extends Backend {

    /**
     * Add the type of input field
     *
     * @param array
     * @return string
     */
    public function listPictures($arrRow) {

        $key = ($arrRow['published']) ? 'published' : 'unpublished';
        $image = $this->getImage($arrRow['singleSRC'], 150, 150, 'box');

        return '
            <div class="cte_type ' . $key . '" style="color:#444;"> ' . $arrRow['name'] . '</div>
            <div class="limit_height h64 block' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h52' : '') . ' block">'
            . '<div style="float: left; margin-right: 10px;"><img src="' . $image .'" /></div>'
            . '<strong>' . $GLOBALS['TL_LANG']['tl_coinPictures']['descriptionBE'] . '</strong><br />' .  $arrRow['description'] .
            '</div>' . "\n";
    }

    /**
     * Return the "toggle visibility" button
     * @param array
     * @param string
     * @param string
     * @param string
     * @param string
     * @param string
     * @return string
     */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes) {

        if (strlen($this->Input->get('tid'))) {

            $this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
            $this->redirect($this->getReferer());
        }

        $href .= '&amp;tid=' . $row['id'] . '&amp;state=' . ($row['published'] ? '' : 1);

        if (!$row['published']) {

            $icon = 'invisible.gif';
        }

        return '<a href="' . $this->addToUrl($href) . '" title="' . specialchars($title) . '"' . $attributes . '>' . $this->generateImage($icon, $label) . '</a> ';
    }

    /**
     * Disable/enable a user group
     * @param integer
     * @param boolean
     */
    public function toggleVisibility($intId, $blnVisible) {

        $this->createInitialVersion('tl_coinPictures', $intId);

        // Trigger the save_callback
        if (is_array($GLOBALS['TL_DCA']['tl_coinPictures']['fields']['published']['save_callback'])) {

            foreach ($GLOBALS['TL_DCA']['tl_coinPictures']['fields']['published']['save_callback'] as $callback) {

                $this->import($callback[0]);
                $blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
            }
        }

        // Update the database
        $this->Database->prepare("UPDATE tl_coinPictures SET published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
                ->execute($intId);

        $this->createNewVersion('tl_coinPictures', $intId);
    }

    /**
     * Return the link picker wizard
     * @param object
     * @return string
     */
    public function pagePicker(DataContainer $dc)
    {
            $strField = 'ctrl_' . $dc->field . (($this->Input->get('act') == 'editAll') ? '_' . $dc->id : '');
            return ' ' . $this->generateImage('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top; cursor:pointer;" onclick="Backend.pickPage(\'' . $strField . '\')"');
    }
}
?>