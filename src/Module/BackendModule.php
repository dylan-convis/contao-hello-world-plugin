<?php

namespace Time4digital\DylansHelloWorldBundle\Module;
class BackendModule
{
    public function generate(): string
    {
        return 'Hello World :)';
    }

    protected function compile()
    {
        return '';    
    } 
}