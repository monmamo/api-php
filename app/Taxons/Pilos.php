<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Pilon')]
#[MasculineAnthropeName('Pilander')]
#[MasculineMonsterName('Pilor')]
#[FeminineAnthropeName('Pilquin')]
#[FeminineMonsterName('Piless')]
class Pilos implements Taxon
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

// Monsters with thick hair or fur.

// ,,,,
// [[Body Covering Form]]. Monsters with thick hair or fur.
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// [[Fur]]
