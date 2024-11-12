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

//  Generally smaller than normal, with a pygmy profile, butterfly-like wings, and no tail.

// [[Fairy Wings]]
#[Gloss('Fairy forms.')]
#[NeuterName('Faeon')]
#[MasculineAnthropeName('Faeander')]
#[MasculineMonsterName('Faer')]
#[FeminineAnthropeName('Faequin')]
#[FeminineMonsterName('Faess')]
#[Rarity('winged-morphotypes')]
#[SizeDelta(-0.5)]
class Faeos extends BaseTaxon
{
    use WingedMorphotype;
}
