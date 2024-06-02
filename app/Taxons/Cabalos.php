<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Cabalon')]
#[MasculineAnthropeName('Cabalander')]
#[MasculineMonsterName('Cabalor')]
#[FeminineAnthropeName('Cabalquin')]
#[FeminineMonsterName('Cabaless')]
class Cabalos implements Taxon
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

// phylum:: Rideable quadrupeds.

// Alternatives:
// Masculine: Cabalor
// Feminine: Cabaless
// Plural:
// Attributes:

// Excludes:
// Prefers:
// rarity: 1000
// size delta: 1
// Assets:
// Flaws:
