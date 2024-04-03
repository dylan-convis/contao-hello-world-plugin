<?php

namespace Time4digital\DylansHelloWorldBundle\Module;

use Contao\Module;

$GLOBALS['TL_CSS'][] = 'bundles/dylanshelloworld/styles.css';
$GLOBALS['TL_JAVASCRIPT'][] = 'bundles/dylanshelloworld/scripts.js';

class DylanHelloWorldModule extends Module
{
    protected $strTemplate = 'mod_helloWorld'; // Template name for backend module

    protected function compile()
    {
        $this->Template->message = 'Hello World!';

        try {
            $objEntries = $this->Database->execute("SELECT * FROM tl_messages");
            $this->Template->entries = $objEntries->fetchAllAssoc();
        } catch (\Exception $e) {
            $this->Template->entries = [];
        }
    }
}