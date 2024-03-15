<?php

// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['Dylans Hello World FE'] = 'Time4digital\DylansHelloWorldBundle\Module\DylanHelloWorldModule';


// Backend modules
$GLOBALS['BE_MOD']['content']['Dylans Hello World BE'] = [
    'tables' => ['helloworlddylan'],
    'disablePermissionChecks' => true,
    'hideInNavigation' => false,
];