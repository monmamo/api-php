<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;

// spinal morphotype:: [[Razor Carapace]]

#[NeuterName('Rason')]
#[MasculineAnthropeName('Rasander')]
#[MasculineMonsterName('Rasor')]
#[FeminineAnthropeName('Rasquin')]
#[FeminineMonsterName('Rasess')]
#[Rarity(30)]
#[SizeDelta(0.3)]
class Rasos extends BaseTaxon {}
