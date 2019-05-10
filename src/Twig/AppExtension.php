<?php

namespace App\Twig;

use Twig\TwigFilter;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class AppExtension extends AbstractExtension implements GlobalsInterface
{
    /**
     * @var string
     */
    private $locale;

    public function __construct(string $locale)
    {
        $this->locale = $locale;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, 'priceFilter'])
        ];
    }

    public function getGlobals()
    {
        return [
            'locale' => $this->locale
        ];
        //on peut mettre {{ locale }} n'importe où dans le code  
        
    }

    public function priceFilter($number)
    {
        return '$'.number_format($number, 2, '.',',');
    }



    public function getTests()
    {
        return [];
    }

    public function getFunctions()
    {
        return [];
    }
}