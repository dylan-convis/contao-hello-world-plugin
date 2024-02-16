<?php

namespace Time4digital\DylansHelloWorldBundle\Module;

use Contao\BackendModule;

class DylanHelloWorldModule extends BackendModule
{
    protected $strTemplate = 'mod_helloWorld'; // Template name for backend module

    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');
    
            // Use the correct key to access the module name translation
            $template->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['helloWorld'][0]) . ' ###';
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name;
            $template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;
    
            return $template->parse();
        }
    
        return parent::generate();
    }
    

    protected function compile()
    {
        $this->Template->message = 'Hello World';
    }
}