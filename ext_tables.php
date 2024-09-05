<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Localization\LanguageService;

defined('TYPO3') or die();

(static function()
	{
		
		$versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
		
		// Helper function to add descriptions based on TYPO3 version
		function addTableDescriptions(string $table, string $filePath): void
		{
			if (class_exists(LanguageService::class)) {
				$GLOBALS['TCA_DESCR'][$table]['refs'] = $filePath;
			} else {
				ExtensionManagementUtility::addLLrefForTCAdescr(
					$table,
					$filePath
				);
			}
		}
		
		addTableDescriptions(
			'tx_verowaimportapi_domain_model_event',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_event.xlf'
		);
		
		addTableDescriptions(
			'tx_verowaimportapi_domain_model_person',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_person.xlf'
		);
		
		addTableDescriptions(
			'tx_verowaimportapi_domain_model_layer',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_layer.xlf'
		);
		
		addTableDescriptions(
			'tx_verowaimportapi_domain_model_room',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_room.xlf'
		);
		
		// Allow tables on standard pages for TYPO3 versions < 12
		if ($versionInformation->getMajorVersion() < 12) {
			$tables = [
				'tx_verowaimportapi_domain_model_event',
				'tx_verowaimportapi_domain_model_person',
				'tx_verowaimportapi_domain_model_targetgroup',
				'tx_verowaimportapi_domain_model_layer',
				'tx_verowaimportapi_domain_model_room'
			];
			foreach ($tables as $table) {
				ExtensionManagementUtility::allowTableOnStandardPages($table);
			}
		}
	}
)();