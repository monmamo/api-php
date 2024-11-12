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

#[Gloss('Full back carapace.')]
#[NeuterName('Carabon')]
#[MasculineAnthropeName('Carabander')]
#[MasculineMonsterName('Carabor')]
#[FeminineAnthropeName('Carapquin')]
#[FeminineMonsterName('Carabess')]
#[Rarity('spinal-morphotypes')]
#[SizeDelta(0.25)]
class Carabos extends BaseTaxon
{
    use SpinalMorphotype;
}
