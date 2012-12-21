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
 * Table tl_coinSlider
 */
$GLOBALS['TL_DCA']['tl_coinSlider'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
                'ctable'                      => array('tl_coinPictures'),
                'switchToEdit'                => true,
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'flag'                    => 1,
                        'panelLayout'             => 'search'
		),
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s',
                        'label_callback'          => array('tl_coinSlider', 'addPicturesNumber')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_coinSlider']['edit'],
				'href'                => 'table=tl_coinPictures',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_coinSlider']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_coinSlider']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
                        'toggle' => array
                        (
                                'label'               => &$GLOBALS['TL_LANG']['tl_coinSlider']['toggle'],
                                'icon'                => 'visible.gif',
                                'attributes'          => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
                                'button_callback'     => array('tl_coinSlider', 'toggleIcon')
                        ),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_coinSlider']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => '{title_legend},title,alias;{preferences_legend},width,height,spw,sph,delay,sDelay,opacity,titleSpeed,effect,navigation,links,hoverPause,prevText,nextText;{publish_legend},published'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
            	'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'alias' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['alias'],
                        'exclude'                 => true,
                        'inputType'               => 'text',
                        'eval'                    => array('rgxp'=>'alnum', 'doNotCopy'=>true, 'spaceToUnderscore'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
                        'save_callback' => array
                        (
                                array('tl_coinSlider', 'generateAlias')
                        )
                ),
		'width' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['width'],
			'exclude'                 => true,
                        'default'                 => '565',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'height' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['height'],
			'exclude'                 => true,
                        'default'                 => '290',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'spw' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['spw'],
			'exclude'                 => true,
                        'default'                 => '7',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'sph' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['sph'],
			'exclude'                 => true,
                        'default'                 => '5',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'delay' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['delay'],
			'exclude'                 => true,
                        'default'                 => '3000',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
                'sDelay' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['sDelay'],
			'exclude'                 => true,
                        'default'                 => '30',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'opacity' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['opacity'],
			'exclude'                 => true,
                        'default'                 => '0.7',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),
                'titleSpeed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['titleSpeed'],
			'exclude'                 => true,
                        'default'                 => '500',
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50')
		),

                'effect' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['effect'],
			'exclude'                 => true,
                        'default'                 => 'random',
			'inputType'               => 'select',
                        'options'                 => array('all', 'random', 'swirl', 'rain', 'straight'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_coinSlider'],
			'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'w50')
		),
                'navigation' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['navigation'],
			'exclude'                 => true,
                        'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean'=>true, 'tl_class'=>'w50 m12')
		),
                'links' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['links'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean'=>true, 'tl_class'=>'w50 m12')
		),
                'hoverPause' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['hoverPause'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean'=>true, 'tl_class'=>'w50 m12')
		),
                'published' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['published'],
                        'exclude'                 => true,
                        'filter'                  => true,
                        'flag'                    => 2,
                        'inputType'               => 'checkbox',
                        'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'w50 m12')
                ),
                'prevText' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['prevText'],
			'exclude'                 => true,
                        'default'                 => 'prev',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
                'nextText' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_coinSlider']['nextText'],
			'exclude'                 => true,
                        'default'                 => 'next',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		)
	)
);


/**
 * Class tl_coinSlider
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @package Controller
 */
class tl_coinSlider extends Backend {

    /**
     * Count the number of courses in the database
     * @param array
     * @param string
     * @return string
     */
    public function addPicturesNumber($row, $label) {

        $objChildren = $this->Database->prepare("SELECT COUNT(*) AS count FROM tl_coinPictures WHERE pid=?")
                ->execute($row['id']);

        $label .= ' <span style="color:#b3b3b3; padding-left:3px;">' . sprintf('[%s ' . $GLOBALS['TL_LANG']['tl_coinSlider']['pictures'] . ']', $objChildren->count) . '</span>';

        return $label;
    }

    /**
     * Autogenerate a news alias if it has not been set yet
     * @param mixed
     * @param object
     * @return string
     */
    public function generateAlias($varValue, DataContainer $dc) {
        $autoAlias = false;

        // Generate alias if there is none
        if (!strlen($varValue)) {
            $autoAlias = true;
            $key = $dc->activeRecord->title;
            if(strlen($dc->activeRecord->title) > 0) {
                $keyAlias = $key;
            }
            $varValue = standardize($keyAlias);
        }

        $objAlias = $this->Database->prepare("SELECT id FROM tl_coinSlider WHERE id=? OR alias=?")
                ->execute($dc->id, $varValue);

        // Check whether the page alias exists
        if ($objAlias->numRows > 1) {
            if (!$autoAlias) {
                throw new Exception(sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
            }

            $varValue .= '-' . $dc->id;
        }

        return $varValue;
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

        if (strlen(Input::get('tid'))) {

            $this->toggleVisibility(Input::get('tid'), (Input::get('state') == 1));
            $this->redirect($this->getReferer());
        }

        $href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

        if (!$row['published']) {

            $icon = 'invisible.gif';
        }

        return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
    }


    /**
     * Disable/enable a user group
     * @param integer
     * @param boolean
     */
    public function toggleVisibility($intId, $blnVisible) {

        $this->createInitialVersion('tl_coinSlider', $intId);

        // Trigger the save_callback
        if (is_array($GLOBALS['TL_DCA']['tl_coinSlider']['fields']['published']['save_callback'])) {

            foreach ($GLOBALS['TL_DCA']['tl_coinSlider']['fields']['published']['save_callback'] as $callback) {

                $this->import($callback[0]);
                $blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
            }
        }

        // Update the database
        $this->Database->prepare("UPDATE tl_coinSlider SET published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
                ->execute($intId);

        $this->createNewVersion('tl_coinSlider', $intId);

    }
}

?>