<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    // Icon identifier
    'verowa_importapi-plugin-eventlist' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventlist.svg',
    ],
    'verowa_importapi-plugin-eventdetails' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:verowa_importapi/Resources/Public/Icons/user_plugin_eventdetails.svg',
    ],
];

