<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, 'priceFilter'])
        ];
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