<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Vedron')]
#[MasculineAnthropeName('Vedrander')]
#[MasculineMonsterName('Vedror')]
#[FeminineAnthropeName('Vedrquin')]
#[FeminineMonsterName('Vedress')]
class Vedros implements Taxon
{
    public static function rarity(): float
    {
        return TODO;
    }

    public static function sizeDelta(): float
    {
        return 0;
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
