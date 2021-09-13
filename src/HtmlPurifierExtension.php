<?php

namespace Depa\TwigExtension\HtmlPurifierExtension;

use Twig\Extension\AbstractExtension;

class HtmlPurifierExtension extends AbstractExtension
{
    /**
     * Return extension name
     *
     * @return string
     */
    public function getName()
    {
        return 'Depa/HtmlPuriferExtension';
    }

    public function getFilters()
    {
        return [
            new TwigFilter('htmlpurify', [$this, 'purify']),
        ];
    }

    public function purify($value){
        $config = \HTMLPurifier_Config::createDefault();
        $purifer =new \HTMLPurifier($config);
        return $purifer->purify($value);
    }
}