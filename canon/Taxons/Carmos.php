<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Power;

// image generation prompt:: [[needs representative image]]

// automatic traits:: [[Charm (trait)]] [[Eros]] [[Cuteness]]
// prohibited traits:: Ugliness
// Color: Orange/Gold

#[Gloss('Powers of charm, beauty, eros, lust, and sexual attraction.')]
#[NeuterName('Carmon')]
#[MasculineAnthropeName('Carmander')]
#[MasculineMonsterName('Carmor')]
#[FeminineAnthropeName('Carmquin')]
#[FeminineMonsterName('Carmess')]
#[Rarity('powers')]
class Carmos extends BaseTaxon
{
    use Power;
}
