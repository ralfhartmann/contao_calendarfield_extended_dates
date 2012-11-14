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
 * Class CalendarfieldExtendedDates
 * Contain methods to check the posted data
 */
class CalendarfieldExtendedDates extends Controller
{
	/**
	 * Check if the posted data is in the given time range
	 *
	 * @param	Widget	$objWidget	The widget of the form element
	 * @param	int		$intId		The ID of the formular
	 * @return	Widget				The given widget object
	 */
	public function checkPostData(Widget $objWidget, $intId)
	{
		// only parse calendar types
		if ($objWidget->type !== 'calendar')
		{
			return $objWidget;
		}

		// only parse the extended dates if it's enabled
		if ($objWidget->calendarfield_extended_dates_enable != 1)
		{
			return $objWidget;
		}


		// define the date format
		if ($objWidget->dateFormat !== '')
		{
			$strFormat = $objWidget->dateFormat;
		}
		else
		{
			$strFormat = $GLOBALS['TL_CONFIG']['dateFormat'];
		}


		// extract our information from the serialized storage
		$arrFrom = deserialize($objWidget->calendarfield_extended_dates_from);
		$arrTo = deserialize($objWidget->calendarfield_extended_dates_to);


		// create the date objects
		$objDatetimeSubmit = DateTime::createFromFormat($strFormat, $objWidget->value);

		$objDatetimeFrom = new DateTime();
		$objDatetimeFrom->modify($arrFrom['value'] . ' ' . $arrFrom['unit']);

		$objDatetimeTo = new DateTime();
		$objDatetimeTo->modify($arrTo['value'] . ' ' . $arrTo['unit']);


		// check if the submitted value is in the given range
		if (!($objDatetimeSubmit >= $objDatetimeFrom && $objDatetimeSubmit <= $objDatetimeTo))
		{
			// the error message is editable in the language file, so we have to load them
			$this->loadLanguageFile('tl_form_field');

			// adding the error message to the widget
			$objWidget->addError
			(
				sprintf
				(
					$GLOBALS['TL_LANG']['tl_form_field']['calendarfield_extended_dates_error'],
					$objDatetimeFrom->format($GLOBALS['TL_CONFIG']['dateFormat']),
					$objDatetimeTo->format($GLOBALS['TL_CONFIG']['dateFormat'])
				)
			);
		}

		return $objWidget;
	}
}

?>