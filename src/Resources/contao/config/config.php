<?php
use Time4digital\DylansHelloWorldBundle\Module\DylanHelloWorldModule;
// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['Hello World Plugin'] = DylanHelloWorldModule::class;
// Backend modules
$GLOBALS['BE_MOD']['content']['Messages'] = [
    'tables' => ['tl_messages']
];