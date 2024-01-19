<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_domain_model_project',
        'label' => 'name',
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
        'searchFields' => 'name,teammember,client',
        'iconfile' => 'EXT:projectmanager/Resources/Public/Icons/tx_projectmanager_domain_model_project.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'name, teammember, client, has, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
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
                'foreign_table' => 'tx_projectmanager_domain_model_project',
                'foreign_table_where' => 'AND {#tx_projectmanager_domain_model_project}.{#pid}=###CURRENT_PID### AND {#tx_projectmanager_domain_model_project}.{#sys_language_uid} IN (-1,0)',
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

        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_domain_model_project.name',
            'description' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_domain_model_project.name.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'teammember' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_domain_model_project.teammember',
            'description' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_domain_model_project.teammember.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'client' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_domain_model_project.client',
            'description' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_domain_model_project.client.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'has' => [
            'exclude' => true,
            'label' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_domain_model_project.has',
            'description' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_domain_model_project.has.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_projectmanager_domain_model_tech',
                'foreign_field' => 'project',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
    
    ],
];
