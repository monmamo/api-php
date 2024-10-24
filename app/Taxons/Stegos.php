<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Stegon')]
#[MasculineAnthropeName('Stegander')]
#[MasculineMonsterName('Stegor')]
#[FeminineAnthropeName('Stegquin')]
#[FeminineMonsterName('Stegess')]
class Stegos implements Taxon
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

// morphotype Bone plates protruding from the spine and tail.
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// Prefers:
// spinal morphotype:: Bone plates protruding from the spine and tail.
// rarity: 200000
