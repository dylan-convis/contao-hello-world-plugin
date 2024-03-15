<?php
$GLOBALS['TL_DCA']['tl_dylan'] = [
    'config' => [
        'dataContainer' => \Contao\DC_Table::class,
        'enableVersioning' => false,
        'sql' => [
            'keys' => [
                'id' => 'primary'
            ]
        ]
    ],
    'fields' => [
        'id' => [
            'sql' => "int(10) unsigned NOT NULL auto_increment",
            'label' => 'ID'
        ],
        'tstamp' => [
            'sql' => "int(10) unsigned NOT NULL default '0'",
            'label' => 'TS',
        ],
        'message' => [
            'label' => 'Message',
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50', 'maxlength' => 255],
            'sql' => "varchar(255) NOT NULL default ''"
        ]
    ],
    'palettes' => [
        'default' => '{title_legend},id,tstamp,message'
    ],
    'list' => [
        'sorting' =>[
            'mode' => 1,
            'fields' => ['message']
        ]
    ]
];
?>