<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// spinal morphotype:: Full back carapace.

#[NeuterName('Carabon')]
#[MasculineAnthropeName('Carabander')]
#[MasculineMonsterName('Carabor')]
#[FeminineAnthropeName('Carapquin')]
#[FeminineMonsterName('Carabess')]
class Carabos implements Taxon
{
    public static function rarity(): float
    {
        return 150000;
    }

    public static function sizeDelta(): float
    {
        return 0.25;
    }
}
