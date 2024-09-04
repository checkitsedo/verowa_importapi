<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
	static function()
	{
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
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
		
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
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

		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:verowa_importapi/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">'
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
		
		// wizards
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'mod {
				wizards.newContentElement.wizardItems.plugins {
					elements {
						eventlist {
							iconIdentifier = verowa_importapi-plugin-eventlist
							title = LLL:EXT:verowa_importapi/Resources/Private/Language/locallang_db.xlf:tx_verowa_importapi_eventlist.name
							description = LLL:EXT:verowa_importapi/Resources/Private/Language/locallang_db.xlf:tx_verowa_importapi_eventlist.description
							tt_content_defValues {
								CType = list
								list_type = verowaimportapi_eventlist
							}
						}
						eventdetails {
							iconIdentifier = verowa_importapi-plugin-eventdetails
							title = LLL:EXT:verowa_importapi/Resources/Private/Language/locallang_db.xlf:tx_verowa_importapi_eventdetails.name
							description = LLL:EXT:verowa_importapi/Resources/Private/Language/locallang_db.xlf:tx_verowa_importapi_eventdetails.description
							tt_content_defValues {
								CType = list
								list_type = verowaimportapi_eventdetails
							}
						}
					}
					show = *
				}
			}'
		);
	}
);
