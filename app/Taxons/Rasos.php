<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Rason')]
#[MasculineAnthropeName('Rasander')]
#[MasculineMonsterName('Rasor')]
#[FeminineAnthropeName('Rasquin')]
#[FeminineMonsterName('Rasess')]
class Rasos implements Taxon
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

// spinal morphotype:: [[Razor Carapace]]
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// Prefers:
// with razor carapace.
// rarity: 30
