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

// color:: green

#[Gloss('Grasses, leaves and simple plants.')]
#[NeuterName('Folion')]
#[MasculineAnthropeName('Foliander')]
#[MasculineMonsterName('Folior')]
#[FeminineAnthropeName('Foliquin')]
#[FeminineMonsterName('Foliess')]
#[Rarity('powers')]
class Folios extends BaseTaxon
{
    use Power;
}
