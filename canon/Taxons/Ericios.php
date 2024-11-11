<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;

// genus of phylum Rodentos. Hedgehog forms
// [[genus]] of phylum [[Rodentos]]. Hedgehog forms, urchins.

#[NeuterName('Ericion')]
#[MasculineAnthropeName('Ericiander')]
#[MasculineMonsterName('Ericior')]
#[FeminineAnthropeName('Ericiquin')]
#[FeminineMonsterName('Ericiess')]
#[Rarity(200000)]
class Ericios extends BaseTaxon {}
