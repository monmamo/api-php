<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Morphotype;

#[NeuterName('Vacon')]
#[MasculineMonsterName('Vacor')]
#[FeminineMonsterName('Vackess')]
#[Rarity(1e6)]
#[SizeDelta(0.1)]
class Vacos extends BaseTaxon
{
    use Morphotype;
}
