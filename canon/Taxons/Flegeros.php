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

// morphotype::
// Excludes [[Wings]] and any [[spinal morphotype]].

#[Gloss('Webbed arms (but no wings) that enable flight.')]
#[NeuterName('Flegeron')]
#[MasculineAnthropeName('Flegerander')]
#[MasculineMonsterName('Flegeror')]
#[FeminineAnthropeName('Flegerquin')]
#[FeminineMonsterName('Flegeress')]
#[Rarity('winged-morphotypes')]
#[SizeDelta(0.1)]
class Flegeros extends BaseTaxon
{
    use WingedMorphotype;
}
