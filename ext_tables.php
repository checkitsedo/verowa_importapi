<?<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

(static function() {
    $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);

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
})();