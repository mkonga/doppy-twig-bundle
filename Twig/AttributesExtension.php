<?php

namespace Doppy\TwigBundle\Twig;

class AttributesExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction(
                'html_attributes',
                array($this, 'renderAttributes'),
                array(
                    'needs_environment' => true,
                    'is_safe'           => array('html')
                )
            )
        );
    }

    public function renderAttributes(\Twig_Environment $twig, array $attributes)
    {
        return $twig->render(
            'DoppyTwigBundle:AttributesExtension:renderAttributes.html.twig',
            array(
                'attributes' => $attributes
            )
        );
    }

    public function getName()
    {
        return 'doppy_twig_attributes';
    }
}