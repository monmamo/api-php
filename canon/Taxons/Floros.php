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

// Color: Pink

#[Gloss('Flowers and complex plants.')]
#[NeuterName('Floron')]
#[MasculineAnthropeName('Florander')]
#[MasculineMonsterName('Floror')]
#[FeminineAnthropeName('Florquin')]
#[FeminineMonsterName('Floress')]
#[Rarity('powers')]
class Floros extends BaseTaxon
{
    use Power;
}
