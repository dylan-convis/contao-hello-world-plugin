<?php

declare(strict_types=1);

namespace Time4digital\DylansHelloWorldBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Time4digital\DylansHelloWorldBundle\DylansHelloWorldBundle;

class Plugin implements BundlePluginInterface
{

    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(DylansHelloWorldBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}