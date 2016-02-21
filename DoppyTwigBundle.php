<?php

namespace Doppy\TwigBundle;

use Doppy\TwigBundle\DependencyInjection\CompilerPass\ExtensionsCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DoppyTwigBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        // call parent
        parent::build($container);

        // run extra compilerPass
        $container->addCompilerPass(new ExtensionsCompilerPass());
    }
}
