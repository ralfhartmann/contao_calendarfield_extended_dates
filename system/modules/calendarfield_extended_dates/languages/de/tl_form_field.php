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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['calendarfield_extended_dates_enable']	= array('Erweiterte Datumsprüfung aktivieren', 'Aktivieren Sie diese checkbox um eine erweiterte Datumsprüfung zu aktivieren.');
$GLOBALS['TL_LANG']['tl_form_field']['calendarfield_extended_dates_from']	= array('Startdatum', 'Geben Sie einen Mindestwert ein. Beispiel: 1 Tag');
$GLOBALS['TL_LANG']['tl_form_field']['calendarfield_extended_dates_to']		= array('Enddatum', 'Geben Sie ein Maximalwert ein. Beispiel: 5 Monate');


/**
 * Frontend
 */
$GLOBALS['TL_LANG']['tl_form_field']['calendarfield_extended_dates_error'] = 'Das angegebene Datum muss sich zwischen <date>%s</date> und <date>%s</date> befinden.';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_form_field']['hour']	= 'Stunde';
$GLOBALS['TL_LANG']['tl_form_field']['day']		= 'Tag';
$GLOBALS['TL_LANG']['tl_form_field']['week']	= 'Woche';
$GLOBALS['TL_LANG']['tl_form_field']['month']	= 'Monat';
$GLOBALS['TL_LANG']['tl_form_field']['year']	= 'Jahr';

?>