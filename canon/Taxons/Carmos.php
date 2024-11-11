<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// essential power:: Charm, beauty, eros, lust, sexual attraction.

// image generation prompt:: [[needs representative image]]

// automatic traits:: [[Charm (trait)]] [[Eros]] [[Cuteness]]
// prohibited traits:: Ugliness
// Color: Orange/Gold

#[NeuterName('Carmon')]
#[MasculineAnthropeName('Carmander')]
#[MasculineMonsterName('Carmor')]
#[FeminineAnthropeName('Carmquin')]
#[FeminineMonsterName('Carmess')]
class Carmos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 1000;
    }
}
