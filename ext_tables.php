<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

(static function()
	{
		
		$versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
		
		ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_event',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_event.xlf'
		);
		if ($versionInformation->getMajorVersion() < 12) {
			ExtensionManagementUtility::allowTableOnStandardPages(
				'tx_verowaimportapi_domain_model_event',
			);
		}
		
		ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_person',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_person.xlf'
		);
		if ($versionInformation->getMajorVersion() < 12) {
			ExtensionManagementUtility::allowTableOnStandardPages(
				'tx_verowaimportapi_domain_model_person',
			);
		}

		ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_targetgroup',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_targetgroup.xlf'
		);
		if ($versionInformation->getMajorVersion() < 12) {
			ExtensionManagementUtility::allowTableOnStandardPages(
				'tx_verowaimportapi_domain_model_targetgroup',
			);
		}

		ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_layer',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_layer.xlf'
		);
		if ($versionInformation->getMajorVersion() < 12) {
			ExtensionManagementUtility::allowTableOnStandardPages(
				'tx_verowaimportapi_domain_model_layer',
			);
		}
		
		ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_room',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_room.xlf'
		);
		if ($versionInformation->getMajorVersion() < 12) {
			ExtensionManagementUtility::allowTableOnStandardPages(
				'tx_verowaimportapi_domain_model_room',
			);
		}
		
	}
)();
