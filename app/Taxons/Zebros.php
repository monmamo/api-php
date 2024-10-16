<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Zebron')]
#[MasculineAnthropeName('Zebrander')]
#[MasculineMonsterName('Zebror')]
#[FeminineAnthropeName('Zebrquin')]
#[FeminineMonsterName('Zebress')]
class Zebros implements Taxon
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

// Zebra forms

// 100000,Equos ,,,zebra,Equos  x 10000
