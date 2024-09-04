<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
	static function()
	{
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'VerowaApiconnector',
			'Eventlist',
			[
				\Checkit\VerowaApiconnector\Controller\EventController::class => 'list'
			],
			// non-cacheable actions
			[
				\Checkit\VerowaApiconnector\Controller\EventController::class => 'list'
			]
		);
		
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'VerowaApiconnector',
			'Eventdetails',
			[
				\Checkit\VerowaApiconnector\Controller\EventController::class => 'show'
			],
			// non-cacheable actions
			[
				\Checkit\VerowaApiconnector\Controller\EventController::class => ''
			]
		);

		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:verowa_apiconnector/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">'
		);

		$icons = [
			'verowa_apiconnector-plugin-eventlist' => 'EXT:verowa_apiconnector/Resources/Public/Icons/user_plugin_eventlist.svg',
			'verowa_apiconnector-plugin-eventdetails' => 'EXT:verowa_apiconnector/Resources/Public/Icons/user_plugin_eventdetails.svg',
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
							iconIdentifier = verowa_apiconnector-plugin-eventlist
							title = LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowa_apiconnector_eventlist.name
							description = LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowa_apiconnector_eventlist.description
							tt_content_defValues {
								CType = list
								list_type = verowaapiconnector_eventlist
							}
						}
						eventdetails {
							iconIdentifier = verowa_apiconnector-plugin-eventdetails
							title = LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowa_apiconnector_eventdetails.name
							description = LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowa_apiconnector_eventdetails.description
							tt_content_defValues {
								CType = list
								list_type = verowaapiconnector_eventdetails
							}
						}
					}
					show = *
				}
			}'
		);
	}
);

(function () {
    // Register a custom indexer
    // Adjust this to your namespace and class name.
    // Adjust the autoloading information in composer.json, too!
    // see also Configuration/TCA/Overrides/tx_kesearch_indexerconfig.php
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
        \Checkit\VerowaApiconnector\KeSearch\VerowaIndexer::class;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
        \Checkit\VerowaApiconnector\KeSearch\VerowaIndexer::class;
})();
