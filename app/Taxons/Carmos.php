<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// essential power:: Charm, beauty, eros, lust, sexual attraction.

// image generation prompt:: [[needs representative image]]

// automatic traits:: [[Charm (trait)]] [[Eros]] [[Cuteness]]
// prohibited traits:: Ugliness
// Color: Orange/Gold

#[NeuterName('Carmon')]
#[MasculineAnthropeName('Carmander')]
#[MasculineMonsterName('Carmor')]
#[FeminineAnthropeName('Carmquin')]
#[FeminineMonsterName('Carmess')]
class Carmos implements Taxon
{
    public static function rarity(): float
    {
        return 1000;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
