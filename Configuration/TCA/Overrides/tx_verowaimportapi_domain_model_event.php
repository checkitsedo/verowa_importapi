<?php

defined('TYPO3') or die();

// Registrieren Sie die Sprachdatei für die Kontext-sensitive Hilfe direkt in der TCA-Konfiguration
$GLOBALS['TCA_DESCR']['tx_verowaimportapi_domain_model_event']['refs'] = 'EXT:verowa_importapi/Resources/Private/Language/locallang_csh_tx_verowaimportapi_domain_model_event.xlf';