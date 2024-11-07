<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[Gloss('Light and bioluminescence.')]

// Color: yellow


#[NeuterName('Lumon')]
#[MasculineAnthropeName('Lumander')]
#[MasculineMonsterName('Lumor')]
#[FeminineAnthropeName('Lumquin')]
#[FeminineMonsterName('Lumess')]
class Lumos implements Taxon
{
    public static function rarity(): float
    {
        return 300;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
