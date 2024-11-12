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
use Canon\Taxons\Types\WingedMorphotype;

//"Satanos , Vampiros , Lamis "
// long, powerful tail
// weak wings
// long horns
// [[Path of Luxury (Chaotic Evil)]]
// Requires: Demon Wings, [[Long Tail]]

#[Gloss('Demon-forms.')]
#[NeuterName('Demonon')]
#[MasculineAnthropeName('Demonander')]
#[MasculineMonsterName('Demonor')]
#[FeminineAnthropeName('Demonquin')]
#[FeminineMonsterName('Demoness')]
#[Rarity('winged-morphotypes')]
#[SizeDelta(0.5)]
class Demonos extends BaseTaxon
{
    use WingedMorphotype;
}
