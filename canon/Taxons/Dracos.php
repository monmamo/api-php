<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// morphotype:: Dragon form. Subtaxon of  [[Erectos]]

// image generation prompt:: [[needs representative image]]
#[NeuterName('Dracon')]
#[MasculineAnthropeName('Dracander')]
#[MasculineMonsterName('Dracor')]
#[FeminineAnthropeName('Dracquin')]
#[FeminineMonsterName('Drax')]
class Dracos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 10000000;
    }

    public static function sizeDelta(): float
    {
        return 1.5;
    }
}
