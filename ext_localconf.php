<?php

declare(strict_types=1);

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

		$icons = [
			'verowa_importapi-plugin-eventlist' => 'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventlist.svg',
			'verowa_importapi-plugin-eventdetails' => 'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventdetails.svg',
		];
		
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		foreach ($icons as $identifier => $path) {
			$iconRegistry->registerIcon(
				$identifier,
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => $path]
			);
		};
	}
)();
