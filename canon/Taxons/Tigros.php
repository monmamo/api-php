<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Tigron')]
#[MasculineAnthropeName('Tigrander')]
#[MasculineMonsterName('Tigror')]
#[FeminineAnthropeName('Tigrquin')]
#[FeminineMonsterName('Tigress')]
class Tigros extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}
