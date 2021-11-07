<?php

declare(strict_types=1);

namespace MiladGhofrani\DecoratorBundle\Tests;

use Exception;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class DecoratorTestKernel extends Kernel
{
    public function registerBundles(): array
    {
        return [
            new FrameworkBundle(),
        ];
    }

    /**
     * @throws Exception
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/../src/Resources/config/services.yaml');
        $loader->load(__DIR__.'/Fixtures/Config/config.yaml');
    }
}
