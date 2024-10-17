<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Smilon')]
#[MasculineAnthropeName('Smilander')]
#[MasculineMonsterName('Smilor')]
#[FeminineAnthropeName('Smilquin')]
#[FeminineMonsterName('Smiless')]
class Smilos implements Taxon
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

// ,morphotype
// Color: false
// [[morphotype]]. Saber-teeth.
// Excludes: false
// rarity: 1000000
