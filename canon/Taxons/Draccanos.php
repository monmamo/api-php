<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;

// [[Species]] of genus [[Canos]]. A canine species with dragon-like features.

#[NeuterName('Draccanon')]
#[MasculineAnthropeName('Draccanander')]
#[MasculineMonsterName('Draccanor')]
#[FeminineAnthropeName('Draccanquin')]
#[FeminineMonsterName('Draccaness')]
#[Rarity(3000000)]
#[SizeDelta(0.1)]
class Draccanos extends BaseTaxon {}
