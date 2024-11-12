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

#[Gloss('Sharp horns protruding from the spine.')]
#[NeuterName('Spinon')]
#[MasculineAnthropeName('Spinander')]
#[MasculineMonsterName('Spinor')]
#[FeminineAnthropeName('Spinquin')]
#[FeminineMonsterName('Spiness')]
#[Rarity('spinal-morphotypes')]
#[SizeDelta(0.25)]
class Spinos extends BaseTaxon
{
    use SpinalMorphotype;
}
