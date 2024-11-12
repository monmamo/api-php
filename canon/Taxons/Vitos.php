<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Power;

#[NeuterName('Viton')]
#[MasculineAnthropeName('Vitander')]
#[MasculineMonsterName('Vitor')]
#[FeminineAnthropeName('Vitquin')]
#[FeminineMonsterName('Vitess')]
#[Rarity('powers')]
class Vitos extends BaseTaxon
{
    use Power;
}
