<?php
/**
 * @version 2.3.1
 * @package JEM
 * @copyright (C) 2013-2021 joomlaeventmanager.net
 * @copyright (C) 2005-2009 Christoph Lukes
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('JPATH_BASE') or die;

JFormHelper::loadFieldClass('list');



/**
 * CountryOptions Field class.
 *
 * 
 */
class JFormFieldCountryOptions extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 */
	protected $type = 'CountryOptions';

	/**
	 * Method to get the Country options.
	 *
	 */
	public function getOptions()
	{
		return JEMHelperBackend::getCountryOptions();
	}
}
