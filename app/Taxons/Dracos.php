<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// morphotype:: Dragon form. Subtaxon of  [[Erectos]]

// image generation prompt:: [[needs representative image]]

#[NeuterName('Dracon')]
#[MasculineAnthropeName('Dracander')]
#[MasculineMonsterName('Dracor')]
#[FeminineAnthropeName('Dracquin')]
#[FeminineMonsterName('Drax')]
class Dracos implements Taxon
{
    public static function rarity(): float
    {
        return 10000000;
    }

    public static function sizeDelta(): float
    {
        return 1.5;
    }
}
