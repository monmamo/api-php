<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Faunon')]
#[MasculineAnthropeName('Faunander')]
#[MasculineMonsterName('Faunor')]
#[FeminineAnthropeName('Faunquin')]
#[FeminineMonsterName('Fauness')]
class Faunos implements Taxon
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

// Goat-like biped with short [horns]([[Horns]])
// a tail:
// and hooves instead of feet.",species,400000,0.5,Capros ,,Faunor,Fauness,,
