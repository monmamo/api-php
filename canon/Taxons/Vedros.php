<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Power;

// Color: skyblue

#[Gloss('Legendary power of weather, water vapor, wind.')]
#[NeuterName('Vedron')]
// #[MasculineAnthropeName('Vedrander')]
// #[MasculineMonsterName('Vedror')]
// #[FeminineAnthropeName('Vedriquin')]
// #[FeminineMonsterName('Vedress')]
#[Rarity(1e9)]
#[SizeDelta(2)]
class Vedros extends BaseTaxon
{
    use Power;
}
