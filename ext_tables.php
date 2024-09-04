<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
	static function()
	{
		
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_event',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_event.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaimportapi_domain_model_event'
		);
		
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_person',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_person.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaimportapi_domain_model_person'
		);

		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_targetgroup',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_targetgroup.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaimportapi_domain_model_targetgroup'
		);

		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_layer',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_layer.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaimportapi_domain_model_layer'
		);
		
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimportapi_domain_model_room',
			'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_room.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaimportapi_domain_model_room'
		);
		
	}
);
