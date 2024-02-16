<?php

declare(strict_types=1);

/*
 * This file is part of Time4digitalDylan.
 *
 * (c) Ribeiro de Serra Dylan
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\Time4digitalDylan\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\Time4digitalDylan\Time4digitalDylanBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(Time4digitalDylanBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}