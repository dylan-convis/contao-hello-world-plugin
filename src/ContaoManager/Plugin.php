<?php

declare(strict_types=1);

/*
 * This file is part of Time4digitalDylan.
 *
 * (c) Ribeiro de Serra Dylan
 *
 * @license LGPL-3.0-or-later
 */

namespace Time4digital\DylansHelloWorldBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Time4digital\DylansHelloWorldBundle\DylansHelloWorldBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(DylansHelloWorldBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}