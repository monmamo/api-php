<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Flegeron')]
#[MasculineAnthropeName('Flegerander')]
#[MasculineMonsterName('Flegeror')]
#[FeminineAnthropeName('Flegerquin')]
#[FeminineMonsterName('Flegeress')]
class Flegeros implements Taxon
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

// morphotype:: Webbed arms (but no wings) that enable flight.
// Excludes any [[spinal morphotype]].
// Alternates:
// Masculine:
// Fleger
// Feminine:
// Flegeress
// Attributes:

// Excludes: [[Wings]]
// Prefers:
// size delta: 0.1
