<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Vedron')]
#[MasculineAnthropeName('Vedrander')]
#[MasculineMonsterName('Vedror')]
#[FeminineAnthropeName('Vedrquin')]
#[FeminineMonsterName('Vedress')]
class Vedros extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// Weather
// water vapor:
// #[[legendary power]] of weather, water vapor, wind.
// Alternates:
// Masculine:
// Vedror
// Vedrander
// Feminine:
// Vedress
// Vedriquin
// Attributes:

// Color: skyblue
// size delta: 2
