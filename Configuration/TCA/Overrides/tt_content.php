<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaApiconnector',
    'Eventlist',
    'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang.xlf:plugin.eventlist.title',
	'EXT:verowa_apiconnector/Resources/Public/Icons/user_plugin_eventlist.svg'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaApiconnector',
    'Eventdetails',
    'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang.xlf:plugin.eventdetails.title',
	'EXT:verowa_apiconnector/Resources/Public/Icons/user_plugin_eventdetails.svg'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaapiconnector_eventlist'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaapiconnector_eventlist',
    'FILE:EXT:verowa_apiconnector/Configuration/FlexForms/PluginEventlist.xml'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaapiconnector_eventdetails'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaapiconnector_eventdetails',
    'FILE:EXT:verowa_apiconnector/Configuration/FlexForms/PluginEventdetails.xml'
);
