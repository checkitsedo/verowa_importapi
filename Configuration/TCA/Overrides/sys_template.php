<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'verowa_importapi',
    'Configuration/TypoScript/',
    'Verowa API Connector'
);