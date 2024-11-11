<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// Color: Pink

#[Gloss('Flowers and complex plants.')]
#[NeuterName('Floron')]
#[MasculineAnthropeName('Florander')]
#[MasculineMonsterName('Floror')]
#[FeminineAnthropeName('Florquin')]
#[FeminineMonsterName('Floress')]
class Floros extends BaseTaxon
{
    public static function rarity(): float
    {
        return 200000;
    }
}
