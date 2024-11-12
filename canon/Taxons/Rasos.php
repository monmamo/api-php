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
use Canon\Taxons\Types\SpinalMorphotype;

#[Gloss('Razor carapace.')]
#[NeuterName('Rason')]
#[MasculineAnthropeName('Rasander')]
#[MasculineMonsterName('Rasor')]
#[FeminineAnthropeName('Rasquin')]
#[FeminineMonsterName('Rasess')]
#[Rarity('spinal-morphotypes')]
#[SizeDelta(0.25)]
class Rasos extends BaseTaxon
{
    use SpinalMorphotype;
}
