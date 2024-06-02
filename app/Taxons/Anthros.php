<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Anthron')]
#[MasculineAnthropeName('Anthrander')]
#[MasculineMonsterName('Anthror')]
#[FeminineAnthropeName('Anthrquin')]
#[FeminineMonsterName('Anthress')]
class Anthros implements Taxon
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

// Plantlike growth from the monster's back.
// 100000:,Floros ,,,,,,,,,,,,Floros  x ???
