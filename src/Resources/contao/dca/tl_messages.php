<?php
use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_messages'] = [
    'palettes' => [
        'default' => '{messages_legend},message;'
    ],

    'fields' => [
        'id' => [
            'sql' => "int(10) unsigned NOT NULL auto_increment",
        ],
        'tstamp' => [
            'sql' => "int(10) unsigned NOT NULL default '0'",
            'label' => 'TS',
        ],
        'message' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50', 'maxlength' => 255],
            'sql' => "varchar(255) NOT NULL default ''"
        ]
    ],
    
    'config' => [
        'dataContainer' => DC_Table::class,
        'sql' => [
            'keys' => [
                'id' => 'primary'
            ]
        ]
    ],

    'list' => [
        'sorting' => [
            'mode' => 1,
        ],
        'operations' => [
            'edit',
            'delete',
        ],
        'label' => [
            'fields'  => ['id','message'],
            'showColumns' => true,
        ]
    ],
];