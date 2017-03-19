<?php

namespace Doppy\TwigBundle\DependencyInjection\CompilerPass;

use Doppy\TwigBundle\DependencyInjection\Configuration;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ExtensionsCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // get enabled twig extensions from config
        $enabledExtensions = $container->getParameter('doppy_twig.extensions');

        // loop through all available extensions
        foreach (Configuration::getAvailableExtensions() as $extension) {
            // remove it from the container when it is not enabled
            if (!in_array($extension, $enabledExtensions)) {
                $container->removeDefinition('doppy_twig.extensions.' . $extension);
            }
        }
    }
}
