<?php

// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['helloWorld'] = 'Time4digital\DylansHelloWorldBundle\Module\DylanHelloWorldModule';


// Backend modules
$GLOBALS['BE_MOD']['content']['helloworlddylan'] = [
    'tables' => ['tl_dylanhelloworld'],
    'disablePermissionChecks' => true,
    'hideInNavigation' => false,
];