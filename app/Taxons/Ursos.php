<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[genus]] of phylum [[Silvadys]]
// Bear-forms and raccoon-forms.
// image generation prompt:: bearlike, bearform
// image tags:: bear, bearmonster, bearanthro

#[NeuterName('Urson')]
#[MasculineAnthropeName('Ursander')]
#[MasculineMonsterName('Ursor')]
#[FeminineAnthropeName('Ursquin')]
#[FeminineMonsterName('Ursess')]
class Ursos implements Taxon
{
    public static function rarity(): float
    {
        return 10;
    }

    public static function sizeDelta(): float
    {
        return 0.3;
    }
}
