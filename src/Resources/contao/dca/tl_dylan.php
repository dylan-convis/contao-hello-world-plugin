<?php
$GLOBALS['TL_DCA']['tl_dylan'] = [
    'config' => array
    (
        'dataContainer' => \Contao\DC_Table::class,
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),
    
    'fields' => array(
        'id' => array(
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'message' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_dylan']['message'],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50', 'maxlength' => 255],
            'sql' => "varchar(255) NULL" 
        ),
    )
];