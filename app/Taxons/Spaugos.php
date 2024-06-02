<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Spaugon')]
#[MasculineAnthropeName('Spaugander')]
#[MasculineMonsterName('Spaugor')]
#[FeminineAnthropeName('Spaugquin')]
#[FeminineMonsterName('Spaugess')]
class Spaugos implements Taxon
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
