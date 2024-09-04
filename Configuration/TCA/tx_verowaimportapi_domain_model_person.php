<?php
return [
	'ctrl' => [
		'title' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_person',
		'label' => 'person_id',
		'label_alt' => 'name',
		'label_userFunc' => \Checkit\VerowaApiconnector\Userfuncs\Tca::class . '->personBeTitle',
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
		'searchFields' => 'person_id,name,firstname,lastname,phone,profession,email',
		'iconfile' => 'EXT:verowa_apiconnector/Resources/Public/Icons/tx_verowaapiconnector_domain_model_person.gif'
	],
	'external' => [
		'general' => [
			0 => [
				'connector' => 'json',
				'parameters' => [
					'uri' => 'https://api.verowa.ch/geteventdetails/stjosef-zuerich/1ad89c27e1a89ef6aa34f34e4adf7448/0',
					'encoding' => 'utf-8',
					'headers' => [
						'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:75.0) Gecko/20100101 Firefox/75.0',
						'Accept' => 'application/json'
					]
				],
				'data' => 'array',
				'referenceUid' => 'person_id',
				'group' => 'stjoseftest',
				'pid' => 91,
				'priority' => 10,
				'description' => 'Import of all events from Verowa'
			]
		]
	],
	'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, person_id, name, firstname, lastname, phone, profession, email, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
				'foreign_table' => 'tx_verowaapiconnector_domain_model_person',
				'foreign_table_where' => 'AND {#tx_verowaapiconnector_domain_model_person}.{#pid}=###CURRENT_PID### AND {#tx_verowaapiconnector_domain_model_person}.{#sys_language_uid} IN (-1,0)',
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
		
		'person_id' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_person.person_id',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
			'external' => [
				0 => [
					'arrayPath' => 'organizer/person_id'
				]
			]
		],
		'name' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_person.name',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
			'external' => [
				0 => [
					'arrayPath' => 'organizer/name'
				]
			]
		],
		'firstname' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_person.firstname',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
			'external' => [
				0 => [
					'arrayPath' => 'organizer/firstname'
				]
			]
		],
		'lastname' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_person.lastname',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
			'external' => [
				0 => [
					'arrayPath' => 'organizer/lastname'
				]
			]
		],
		'phone' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_person.phone',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
			'external' => [
				0 => [
					'arrayPath' => 'organizer/phone'
				]
			]
		],
		'profession' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_person.profession',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
			'external' => [
				0 => [
					'arrayPath' => 'organizer/profession'
				]
			]
		],
		'email' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_apiconnector/Resources/Private/Language/locallang_db.xlf:tx_verowaapiconnector_domain_model_person.email',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
			'external' => [
				0 => [
					'arrayPath' => 'organizer/email'
				]
			]
		],
		'events' => [
			'config' => [
				'type' => 'passthrough',
			],
		],
	],
];
