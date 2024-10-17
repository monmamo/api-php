<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Psychon')]
#[MasculineAnthropeName('Psychander')]
#[MasculineMonsterName('Psychor')]
#[FeminineAnthropeName('Psychquin')]
#[FeminineMonsterName('Psychess')]
class Psychos implements Taxon
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

// Powers of the mind and the soul.

// ,,,,
// Alternates:
// Masculine:
// Psychor
// Psychander
// Feminine:
// Psychess
// Psychquin
// Attributes:

// Color: indigo
// [[essential power]]. Powers of the mind and the soul.
// rarity: 800000
