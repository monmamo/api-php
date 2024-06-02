<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Meffiton')]
#[MasculineAnthropeName('Meffitander')]
#[MasculineMonsterName('Meffitor')]
#[FeminineAnthropeName('Meffitquin')]
#[FeminineMonsterName('Meffitess')]
class Meffitos implements Taxon
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

// derived power: Skunk powers. A subtaxon of [[Venenos]].
// Musk glands near the anus that spray. A white stripe from head to tail, which indicates that the anthrope or monster is Meffiton.

// ,,Venenos ,,,"Marcy Meffitson , Lester Meffitson , John Welcome Meffitson ",Meffitander ,Meffitor,Meffitquin,Meffitess,Meffitander,"",,Meffiton,
// alternate names
// Masculine:
// Meffitor
// Meffitander
// Feminine:
// Meffitess
// Meffitquin
// rarity: 2000
