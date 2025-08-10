<?php

namespace Bits\FlyBackendBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\Config\FileLocator;

class FlyBackendBundle extends AbstractBundle
{
    
    public function build(ContainerBuilder $container): void
    {
        
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/Resources/config')); 
        $loader->load('services.yaml');

         $loader2 = new PhpFileLoader($container, new FileLocator(__DIR__.'/Resources/config')); 
        $loader2->load('bundles.php');
    }
    
}
