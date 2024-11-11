<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// Great whale forms. Exclusively aquatic.
// [[Species]]

// image generation prompt:: [[needs representative image]]
#[NeuterName('Ceton')]
#[MasculineMonsterName('Cetor')]
#[FeminineMonsterName('Cetess')]
class Cetos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Aquadys::rarity() / Aquadys::subtaxons()[self::class];
    }

    public static function sizeDelta(): float
    {
        return Aquadys::sizeDelta() + 1;
    }
}
