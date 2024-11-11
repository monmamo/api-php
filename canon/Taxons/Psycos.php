<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;

// Color: indigo
// [[essential power]]. Powers of the mind and the soul.

#[NeuterName('Psycon')]
#[MasculineAnthropeName('Psycander')]
#[MasculineMonsterName('Psycor')]
#[FeminineAnthropeName('Psycquin')]
#[FeminineMonsterName('Psyckess')]
#[Rarity('essential-powers')]
class Psycos extends BaseTaxon {}
