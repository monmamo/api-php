<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Spinon')]
#[MasculineAnthropeName('Spinander')]
#[MasculineMonsterName('Spinor')]
#[FeminineAnthropeName('Spinquin')]
#[FeminineMonsterName('Spiness')]
class Spinos implements Taxon
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

// morphotype
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// Prefers:
// spinal morphotype:: Sharp horns protruding from the spine.
// rarity: 200000
// size delta: INCOMPLETE
