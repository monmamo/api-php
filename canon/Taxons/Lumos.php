<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[Gloss('Light and bioluminescence.')]

// Color: yellow

#[NeuterName('Lumon')]
#[MasculineAnthropeName('Lumander')]
#[MasculineMonsterName('Lumor')]
#[FeminineAnthropeName('Lumquin')]
#[FeminineMonsterName('Lumess')]
class Lumos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 300;
    }
}
