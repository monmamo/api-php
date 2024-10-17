<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Feron')]
#[MasculineAnthropeName('Ferander')]
#[MasculineMonsterName('Feror')]
#[FeminineAnthropeName('Ferquin')]
#[FeminineMonsterName('Feress')]
class Feros implements Taxon
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

// Monsters of the wild; impossible or difficult to domesticate.
// Alternates:
// Masculine:
// Ferr
// Feminine:
// Feress
// Attributes:
