<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\SizeMorphotype;

// ,Cherubos ,pygmy,

#[Gloss('Pygmy or diminutive forms.')]
#[NeuterName('Pygmyn')]
#[MasculineMonsterName('Pygmyr')]
#[FeminineMonsterName('Pygmyss')]
#[Rarity(4)] // roughly 25% of all monsters
#[SizeDelta(-1)]
class Pygmys extends BaseTaxon
{
    use SizeMorphotype;
}
