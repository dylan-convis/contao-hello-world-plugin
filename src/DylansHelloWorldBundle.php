<?php
/*
 * Bundle
 *
 * (c) Ribeiro de Serra Dylan
 *
 * @license LGPL-3.0-or-later
 */

namespace Time4digital\DylansHelloWorldBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DylansHelloWorldBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}