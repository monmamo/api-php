<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Ericion')]
#[MasculineAnthropeName('Ericiander')]
#[MasculineMonsterName('Ericior')]
#[FeminineAnthropeName('Ericiquin')]
#[FeminineMonsterName('Ericiess')]
class Ericios implements Taxon
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

// genus of phylum Rodentos. Hedgehog forms

// [[genus]] of phylum [[Rodentos]]. Hedgehog forms, urchins.
// Alternates:
// Masculine:
// Ericior
// Feminine:
// Ericiess
// Attributes:

// rarity: 200000
