<?php

namespace Bits\FlyBackendBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Bits\FlyBackendBundle\FlyBackendBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(FlyBackendBundle::class)
            ->setLoadAfter([ContaoCoreBundle::class])
            ];
    }
}
