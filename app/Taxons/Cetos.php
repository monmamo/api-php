<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// Great whale forms. Exclusively aquatic.
// [[Species]] of [[Aquadys]] with [[Aquos]] power.

// image generation prompt:: [[needs representative image]]
#[NeuterName('Ceton')]
#[MasculineMonsterName('Cetor')]
#[FeminineMonsterName('Cetess')]
class Cetos implements Taxon
{
    public static function rarity(): float
    {
        return 150000;
    }

    public static function sizeDelta(): float
    {
        return 1;
    }
}
