<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// [[genus]] of phylum [[Silvadys]]
// Bear-forms and raccoon-forms.
// image generation prompt:: bearlike, bearform
// image tags:: bear, bearmonster, bearanthro

#[NeuterName('Urson')]
#[MasculineAnthropeName('Ursander')]
#[MasculineMonsterName('Ursor')]
#[FeminineAnthropeName('Ursquin')]
#[FeminineMonsterName('Ursess')]
class Ursos extends BaseTaxon
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
