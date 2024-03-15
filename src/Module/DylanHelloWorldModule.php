<?php

namespace Time4digital\DylansHelloWorldBundle\Module;

use Contao\Module;
use Contao\BackendTemplate;

class DylanHelloWorldModule extends Module
{
    protected $strTemplate = 'mod_helloWorld'; // Template name for backend module

    public function generate()
    {
        $template = new BackendTemplate('be_wildcard');

        // Use the correct key to access the module name translation
        $template->title = $this->headline;
        $template->id = $this->id;
        $template->link = $this->name;
        $template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

        return parent::generate();
    }
    
    protected function compile()
    {
        $this->Template->message = 'Hello World!!!!!!! By dylan :)))))))))))))))))))';
    }
}