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

#[Gloss('Fly-forms. Small in stature, with fly wings.')]
#[NeuterName('Zybubon')]
#[MasculineAnthropeName('Zybubander')]
#[MasculineMonsterName('Zybubor')]
#[FeminineAnthropeName('Zybubquin')]
#[FeminineMonsterName('Zybubess')]
#[Rarity('winged-morphotypes')]
#[SizeDelta(-1)]
class Zybubos extends BaseTaxon
{
    use WingedMorphotype;
}
