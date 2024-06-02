<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// color:: green

#[Gloss('Grasses, leaves and simple plants.')]
#[NeuterName('Folion')]
#[MasculineAnthropeName('Foliander')]
#[MasculineMonsterName('Folior')]
#[FeminineAnthropeName('Foliquin')]
#[FeminineMonsterName('Foliess')]
class Folios implements Taxon
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
