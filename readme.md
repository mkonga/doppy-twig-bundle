# Doppy Twig Bundle

A Symfony2/Symfony3 bundle containing some functionality that might be useful.

## installation

### add to composer

````
    "require": {
        "doppy/twig-bundle": "^1.0.0",
    }
````

### add to AppKernel

````
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Doppy\TwigBundle\DoppyTwigBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            // ...
        );
    }
````
Make sure DoppyTwigBundle is loaded *before* TwigBundle.
This is because you can configure additional extensions and the bundle removes services based on this.

### add Twig extensions

To enable the twig extensions, add this to your config:

````
doppy_twig:
    extensions: [ 'text', 'i18n', 'intl', 'array', 'date' ]
````
Only extensions listed will be loaded. If you leave out the config, none will be loaded.
More information about the twig extensions can be found here: http://twig.sensiolabs.org/doc/extensions/index.html

## Features

### Filters

The following filters are available

* str_pad
