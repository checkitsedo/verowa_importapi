<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    $icons = [
        'verowa_importapi-plugin-eventlist' => 'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventlist.svg',
		'verowa_importapi-plugin-eventdetails' => 'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventdetails.svg',
	];
    
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    foreach ($icons as $identifier => $path) {
        $iconRegistry->registerIcon(
            $identifier,
            SvgIconProvider::class,
            ['source' => $path]
        );
    };
];
