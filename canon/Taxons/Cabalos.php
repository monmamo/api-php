<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// Rideable quadrupeds.

#[NeuterName('Cabalon')]
#[MasculineAnthropeName('Cabalander')]
#[MasculineMonsterName('Cabalor')]
#[FeminineAnthropeName('Cabalquin')]
#[FeminineMonsterName('Cabaless')]
class Cabalos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 100;
    }

    public static function sizeDelta(): float
    {
        return 1;
    }
}
