<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// Sound.

#[NeuterName('Sonon')]
#[MasculineAnthropeName('Sonander')]
#[MasculineMonsterName('Sonor')]
#[FeminineAnthropeName('Sonquin')]
#[FeminineMonsterName('Soness')]
class Sonos implements Taxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// ,,,,
// Alternates:
// Masculine:
// Sonor
// Sonander
// Feminine:
// Soness
// Sonquin
// Attributes:

// [[Power]]. Sound.
// rarity: 700000
