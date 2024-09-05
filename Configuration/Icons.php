<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Imaging\IconRegistry;

$icons = [
    'verowa_importapi-plugin-eventlist' => 'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventlist.svg',
    'verowa_importapi-plugin-eventdetails' => 'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventdetails.svg'
];
    
$iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
foreach ($icons as $identifier => $path) {
    $iconRegistry->registerIcon(
        $identifier,
        SvgIconProvider::class,
        ['source' => $path]
    );
};

return[];
