<?php

namespace Doppy\TwigBundle\Twig;


class StringExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('str_pad', function ($input, $padlength, $padstring = '', $padtype = STR_PAD_RIGHT) {
                return str_pad($input, $padlength, $padstring, $padtype);
            })
        );
    }

    public function getName()
    {
        return 'doppy_twig_string';
    }
}
