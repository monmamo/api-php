<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Draccanon')]
#[MasculineAnthropeName('Draccanander')]
#[MasculineMonsterName('Draccanor')]
#[FeminineAnthropeName('Draccanquin')]
#[FeminineMonsterName('Draccaness')]
class Draccanos implements Taxon
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

// [[Species]] of genus [[Canos]]. A canine species with dragon-like features.
// Alternates:
// Masculine:
// Draccanor
// Feminine:
// Draccaness
// Attributes:

// Prefers:
// rarity: 3000000
// size delta: 0.1
