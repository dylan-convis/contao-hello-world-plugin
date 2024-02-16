<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\Time4digitalDylan\Tests;

use Contao\Time4digitalDylan\Time4digitalDylanBundle;
use PHPUnit\Framework\TestCase;

class Time4digitalDylanTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new Time4digitalDylanBundle();

        $this->assertInstanceOf('Contao\Time4digitalDylan\Time4digitalDylanBundle', $bundle);
    }
}