<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// spinal morphotype:: Full back carapace.

#[NeuterName('Carabon')]
#[MasculineAnthropeName('Carabander')]
#[MasculineMonsterName('Carabor')]
#[FeminineAnthropeName('Carapquin')]
#[FeminineMonsterName('Carabess')]
class Carabos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 1500;
    }

    public static function sizeDelta(): float
    {
        return 0.25;
    }
}
