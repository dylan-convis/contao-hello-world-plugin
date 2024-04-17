<?php
use Time4digital\DylansHelloWorldBundle\Module\DylanHelloWorldModule;

// Frontend modules
// Unter "miscellaneous" sollte ein neuer Reiter namens "Hello World Plugin" erstellt werden, welches dann unser Frontend-Modul lädt.
$GLOBALS['FE_MOD']['miscellaneous']['Hello World Plugin'] = DylanHelloWorldModule::class;

// Backend modules
// Unter der Menükategorie "content" sollte nun ein neuer Menüeintrag namens "Messages" erscheinen, der die Tabelle tl_messages verwaltet.
$GLOBALS['BE_MOD']['content']['Messages'] = [
    'tables' => ['tl_messages']
];