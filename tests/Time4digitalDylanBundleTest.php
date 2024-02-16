<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Time4digital\DylansHelloWorldBundle\Tests;

use Time4digital\DylansHelloWorldBundle\DylansHelloWorldBundle;

use PHPUnit\Framework\TestCase;

class Time4digitalDylanTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new DylansHelloWorldBundle();

        $this->assertInstanceOf('Time4digital\DylansHelloWorldBundle\DylansHelloWorldBundle', $bundle);
    }
}