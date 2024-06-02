<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Gynon')]
#[MasculineAnthropeName('Gynander')]
#[MasculineMonsterName('Gynor')]
#[FeminineAnthropeName('Gynquin')]
#[FeminineMonsterName('Gyness')]
class Gynos implements Taxon
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

// A trait in monsters that causes them to start off male when young and become female as they age.
