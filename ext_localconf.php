<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

	(static function()
	{
		ExtensionUtility::configurePlugin(
			'VerowaImportapi',
			'Eventlist',
			[
				\Checkit\VerowaImportapi\Controller\EventController::class => 'list'
			],
			// non-cacheable actions
			[
				\Checkit\VerowaImportapi\Controller\EventController::class => 'list'
			]
		);
		
		ExtensionUtility::configurePlugin(
			'VerowaImportapi',
			'Eventdetails',
			[
				\Checkit\VerowaImportapi\Controller\EventController::class => 'show'
			],
			// non-cacheable actions
			[
				\Checkit\VerowaImportapi\Controller\EventController::class => ''
			]
		);
		
		// Only include page.tsconfig if TYPO3 version is below 12 so that it is not imported twice.
		if ($versionInformation->getMajorVersion() < 12) {
			ExtensionManagementUtility::addPageTSConfig(
				'@import "EXT:verowa_importapi/Configuration/page.tsconfig"'
			);
		}
	}
)();
