<?php

namespace Time4digital\DylansHelloWorldBundle\Module;

use Contao\Module;

class DylanHelloWorldModule extends Module
{
    protected $strTemplate = 'mod_helloWorld'; // Template name for backend module

    protected function compile()
    {
        $this->Template->message = 'Hello World!!!!!!! By dylan :)))))))))))))))))))';
    }
}