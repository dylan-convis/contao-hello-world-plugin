<?php
use Time4digital\DylansHelloWorldBundle\Module\DylanHelloWorldModule;
use Time4digital\DylansHelloWorldBundle\Module\BackendModule;
// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['Dylans Hello World FE'] = DylanHelloWorldModule::class;
// Backend modules
$GLOBALS['BE_MOD']['content']['Dylans Hello World BE'] = [
    'tables' => ['tl_dylan'],
    //'callback'  => BackendModule::class,
    'javascript' => ['bundles/dylanhelloworldmodule/scripts.js'],
    'stylesheet' => ['bundles/dylanhelloworldmodule/styles.css'],
];