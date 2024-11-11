<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Gynon')]
#[MasculineAnthropeName('Gynander')]
#[MasculineMonsterName('Gynor')]
#[FeminineAnthropeName('Gynquin')]
#[FeminineMonsterName('Gyness')]
class Gynos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// A trait in monsters that causes them to start off male when young and become female as they age.
