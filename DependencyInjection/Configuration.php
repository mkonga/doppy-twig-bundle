<?php

namespace Doppy\TwigBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('doppy_twig');

        $rootNode
            ->children()
                ->arrayNode('extensions')
                    ->prototype('enum')
                        ->values(static::getAvailableExtensions())
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }

    /**
     * Returns a list of the available twig extensions
     *
     * Configured like this as the CompilerPass uses the same array.
     *
     * @return string[]
     */
    static public function getAvailableExtensions()
    {
        return ['text', 'i18n', 'intl', 'array', 'date', 'string_loader'];
    }
}
