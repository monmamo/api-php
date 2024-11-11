<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Zebron')]
#[MasculineAnthropeName('Zebrander')]
#[MasculineMonsterName('Zebror')]
#[FeminineAnthropeName('Zebrquin')]
#[FeminineMonsterName('Zebress')]
class Quaggos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// Zebra forms

// 100000,Equos ,zebra,Equos  x 10000
