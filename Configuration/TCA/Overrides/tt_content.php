<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaImportapi',
    'Eventlist',
    'LLL:EXT:verowa_importapi/Resources/Private/Language/locallang.xlf:plugin.eventlist.title',
	'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventlist.svg'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaImportapi',
    'Eventdetails',
    'LLL:EXT:verowa_importapi/Resources/Private/Language/locallang.xlf:plugin.eventdetails.title',
	'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventdetails.svg'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaimportapi_eventlist'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaimportapi_eventlist',
    'FILE:EXT:verowa_importapi/Configuration/FlexForms/PluginEventlist.xml'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaimportapi_eventdetails'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaimportapi_eventdetails',
    'FILE:EXT:verowa_importapi/Configuration/FlexForms/PluginEventdetails.xml'
);
