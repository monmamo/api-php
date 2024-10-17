<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Campon')]
#[MasculineAnthropeName('Campander')]
#[MasculineMonsterName('Campor')]
#[FeminineAnthropeName('Campquin')]
#[FeminineMonsterName('Campess')]
class Campos implements Taxon
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

// Dolphin forms. Fins instead of legs or arms. Exclusively aquatic.
// [[genus]]
// 10000,Aquadys ,,Campor,Campess,Campon,
