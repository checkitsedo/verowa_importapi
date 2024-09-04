<?php
namespace Checkit\VerowaImportapi\Userfuncs;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class that implements many examples related to TCA or TCEform manipulations
 *
 * @author Francois Suter <francois@typo3.org>
 * @package TYPO3
 * @subpackage tx_examples
 */
class Tca
{

	/**
	 * This method creates custom titles for the records of the tx_verowaimportapi_domain_model_event table
	 *
	 * @param array $parameters Parameters used to identify the current record
	 * @param object $parentObject Calling object
	 * @return void
	 */
	public function eventBeTitle(&$parameters, $parentObject)
	{
		$record = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
		$newTitle = $record['event_id'] . ' - ' . $record['title']; // Kombiniere event_id und title mit einem Trennzeichen
		// $newTitle .= ' (' . substr(strip_tags($record['poem']), 0, 10) . '...)';
		$parameters['title'] = $newTitle;
	}
	
	/**
	 * This method creates custom titles for the records of the tx_verowaimportapi_domain_model_layer table
	 *
	 * @param array $parameters Parameters used to identify the current record
	 * @param object $parentObject Calling object
	 * @return void
	 */
	public function layerBeTitle(&$parameters, $parentObject)
	{
		$record = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
		$newTitle = $record['layer_id'] . ' - ' . $record['layer_name']; // Kombiniere event_id und title mit einem Trennzeichen
		// $newTitle .= ' (' . substr(strip_tags($record['poem']), 0, 10) . '...)';
		$parameters['title'] = $newTitle;
	}
	
	/**
	 * This method creates custom titles for the records of the tx_verowaimportapi_domain_model_room table
	 *
	 * @param array $parameters Parameters used to identify the current record
	 * @param object $parentObject Calling object
	 * @return void
	 */
	public function roomBeTitle(&$parameters, $parentObject)
	{
		$record = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
		$newTitle = $record['room_id'] . ' - ' . $record['location_name'] . ' - ' . $record['room_name']; // Kombiniere event_id und title mit einem Trennzeichen
		// $newTitle .= ' (' . substr(strip_tags($record['poem']), 0, 10) . '...)';
		$parameters['title'] = $newTitle;
	}
	
	/**
	 * This method creates custom titles for the records of the tx_verowaimportapi_domain_model_person table
	 *
	 * @param array $parameters Parameters used to identify the current record
	 * @param object $parentObject Calling object
	 * @return void
	 */
	public function personBeTitle(&$parameters, $parentObject)
	{
		$record = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
		$newTitle = $record['person_id'] . ' - ' . $record['name']; // Kombiniere event_id und title mit einem Trennzeichen
		// $newTitle .= ' (' . substr(strip_tags($record['poem']), 0, 10) . '...)';
		$parameters['title'] = $newTitle;
	}
}
