<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:verowa_importapi/Resources/Private/Language/locallang_db.xlf:tx_verowaimportapi_domain_model_layer',
        'label' => 'layer_id',
		'label_alt' => 'layer_name',
		'label_userFunc' => \Checkit\VerowaImportapi\Userfuncs\Tca::class . '->layerBeTitle',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'layer_id,layer_name',
        'iconfile' => 'EXT:verowa_importapi/Resources/Public/Icons/tx_verowaimportapi_domain_model_room.gif'
    ],
    'external' => [
		'general' => [
			0 => [
				'connector' => 'json',
				'parameters' => [
					'uri' => 'https://api.verowa.ch/getlayers/stjosef-zuerich/1ad89c27e1a89ef6aa34f34e4adf7448',
					'encoding' => 'utf-8',
					'headers' => [
						'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:75.0) Gecko/20100101 Firefox/75.0',
						'Accept' => 'application/json'
					]
				],
				'data' => 'array',
				'referenceUid' => 'layer_id',
				'group' => 'stjoseftest',
				'pid' => 91,
				'priority' => 10,
				'description' => 'Import of all events from Verowa'
			]
		]
	],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, layer_id, layer_name, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_verowaimportapi_domain_model_layer',
                'foreign_table_where' => 'AND {#tx_verowaimportapi_domain_model_layer}.{#pid}=###CURRENT_PID### AND {#tx_verowaimportapi_domain_model_layer}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'layer_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_importapi/Resources/Private/Language/locallang_db.xlf:tx_verowaimportapi_domain_model_layer.layer_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'name'
				]
			]
        ],
        'layer_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_importapi/Resources/Private/Language/locallang_db.xlf:tx_verowaimportapi_domain_model_layer.layer_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'layer_id'
				]
			]
        ],
        'events' => [
            'exclude' => 0,
			'label' => 'LLL:EXT:verowa_importapi/Resources/Private/Language/locallang_db.xlf:tx_verowaimportapi_domain_model_layer.events',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_verowaimportapi_domain_model_event',
                'MM' => 'tx_verowaimportapi_event_layer_mm',
                'MM_opposite_field' => 'layers'
            ],
        ],
    ],
];
