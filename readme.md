# Doppy Twig Bundle

A Symfony bundle containing some functionality that might be useful.

## installation

### add to composer

````
    $ composer req doppy/twig-bundle

````

### add to AppKernel

Make sure DoppyTwigBundle is loaded *before* TwigBundle. You probably need to adjust the order for this.
This is because you can configure additional extensions and the bundle removes services based on this.

### add Twig extensions

To enable the twig extensions, add this to your config:

````
doppy_twig:
    extensions: [ 'string', 'attributes' ]
````
Only extensions listed will be loaded. If you leave out the config, none will be loaded.
More information about the twig extensions can be found here: http://twig.sensiolabs.org/doc/extensions/index.html

## Features

* string
  * str_pad
* attributes
  * html_attributes 


