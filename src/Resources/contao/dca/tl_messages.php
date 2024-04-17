<?php
use Contao\DC_Table;

// Der Name der Tabelle; die PHP-Datei sollte entsprechend benannt werden.
$GLOBALS['TL_DCA']['tl_messages'] = [

    // Hier wird festgelegt, was im Contao-Backend angezeigt werden soll:
    'palettes' => [
        'default' => '{messages_legend},message;'
    ],

    // Die SQL-Felder werden hier definiert:
    'fields' => [
        // Dieses Feld ist obligatorisch.
        'id' => [
            'sql' => "int(10) unsigned NOT NULL auto_increment",
        ],
        // Dieses Feld ist obligatorisch.
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
    
    // Hier werden die Keys und weitere Attribute festgelegt.
    'config' => [
        'dataContainer' => DC_Table::class,
        'sql' => [
            'keys' => [
                'id' => 'primary'
            ]
        ]
    ],

    // Hier wird auch definiert, wie das Ganze im Contao-Backend dargestellt wird.
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