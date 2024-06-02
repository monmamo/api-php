<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// Color: Pink

#[Gloss('Flowers and complex plants.')]
#[NeuterName('Floron')]
#[MasculineAnthropeName('Florander')]
#[MasculineMonsterName('Floror')]
#[FeminineAnthropeName('Florquin')]
#[FeminineMonsterName('Floress')]
class Floros implements Taxon
{
    public static function rarity(): float
    {
        return 200000;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
