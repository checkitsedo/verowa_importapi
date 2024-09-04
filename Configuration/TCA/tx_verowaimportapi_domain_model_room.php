<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room',
        'label' => 'room_id',
		'label_alt' => 'location_name,room_name',
		'label_userFunc' => \Checkit\VerowaApiconnector\Userfuncs\Tca::class . '->roomBeTitle',
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
        'searchFields' => 'room_id,room_name,room_public_name,room_location_name,room_location_url',
        'iconfile' => 'EXT:verowa_apiconnector/Resources/Public/Icons/tx_verowaapiconnector_domain_model_room.gif'
    ],
    'external' => [
		'general' => [
			0 => [
				'connector' => 'json',
				'parameters' => [
					'uri' => 'https://api.verowa.ch/getrooms/stjosef-zuerich/1ad89c27e1a89ef6aa34f34e4adf7448',
					'encoding' => 'utf-8',
					'headers' => [
						'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:75.0) Gecko/20100101 Firefox/75.0',
						'Accept' => 'application/json'
					]
				],
				'data' => 'array',
				'referenceUid' => 'room_id',
				'group' => 'stjoseftest',
				'pid' => 91,
				'priority' => 10,
				'description' => 'Import of all events from Verowa'
			]
		]
	],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, room_id, room_name, room_public_name, room_location_name, room_location_url, room_location_url_is_external, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_verowaapiconnector_domain_model_room',
                'foreign_table_where' => 'AND {#tx_verowaapiconnector_domain_model_room}.{#pid}=###CURRENT_PID### AND {#tx_verowaapiconnector_domain_model_room}.{#sys_language_uid} IN (-1,0)',
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

        'location_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.location_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'location_name'
				]
			]
        ],
        'location_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.location_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'location_id'
				]
			]
        ],
        'street' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.street',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'street'
				]
			]
        ],
        'postcode' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.postcode',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'postcode'
				]
			]
        ],
        'city' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.city',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'city'
				]
			]
        ],
        'location_url_is_external' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.location_url_is_external',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ],
			'external' => [
				0 => [
					'field' => 'location_url_is_external'
				]
			]
        ],
        'room_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.room_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'room_name'
				]
			]
        ],
        'room_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.room_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'room_id'
				]
			]
        ],
        'shortcut' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.shortcut',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'shortcut'
				]
			]
        ],
        'location_url' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.location_url',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'location_url'
				]
			]
        ],
		'order' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.order',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'order'
				]
			]
        ],
        'events' => [
            'exclude' => 0,
			'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_room.events',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_verowaapiconnector_domain_model_event',
                'MM' => 'tx_verowaapiconnector_event_room_mm',
                'MM_opposite_field' => 'rooms'
            ],
        ],
    ],
];
