<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
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
 * @copyright  Leo Unglaub 2012
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    calendarfield_extended_dates
 * @license    LGPL
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'calendarfield_extended_dates_enable';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['calendar'] = str_replace
(
	'dateDirection',
	'dateDirection,calendarfield_extended_dates_enable',
	$GLOBALS['TL_DCA']['tl_form_field']['palettes']['calendar']
);


/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['calendarfield_extended_dates_enable'] = 'calendarfield_extended_dates_from,calendarfield_extended_dates_to';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['calendarfield_extended_dates_enable'] = array
(
	'label'					=> &$GLOBALS['TL_LANG']['tl_form_field']['calendarfield_extended_dates_enable'],
	'exclude'				=> true,
	'inputType'				=> 'checkbox',
	'eval'					=> array('tl_class'=>'w50 m12', 'submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['calendarfield_extended_dates_from'] = array
(
	'label'					=> &$GLOBALS['TL_LANG']['tl_form_field']['calendarfield_extended_dates_from'],
	'exclude'				=> true,
	'inputType'				=> 'inputUnit',
	'reference'				=> &$GLOBALS['TL_LANG']['tl_form_field'],
	'options'				=> array('hour', 'day', 'week', 'month', 'year'),
	'eval'					=> array('tl_class'=>'w50 clr')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['calendarfield_extended_dates_to'] = array
(
	'label'					=> &$GLOBALS['TL_LANG']['tl_form_field']['calendarfield_extended_dates_to'],
	'exclude'				=> true,
	'inputType'				=> 'inputUnit',
	'reference'				=> &$GLOBALS['TL_LANG']['tl_form_field'],
	'options'				=> array('hour', 'day', 'week', 'month', 'year'),
	'eval'					=> array('tl_class'=>'w50', 'chosen'=>true)
);

?>