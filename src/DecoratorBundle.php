<?php

declare(strict_types=1);

namespace MiladGhofrani\DecoratorBundle;

use MiladGhofrani\DecoratorBundle\DependencyInjection\DecoratorExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DecoratorBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new DecoratorExtension();
        }

        return $this->extension;
    }
}
