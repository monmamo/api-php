<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Power;

// Color: indigo
// [[essential power]].
#[Gloss('Powers of the mind and the soul.')]
#[NeuterName('Psycon')]
#[MasculineAnthropeName('Psycander')]
#[MasculineMonsterName('Psycor')]
#[FeminineAnthropeName('Psycquin')]
#[FeminineMonsterName('Psyckess')]
#[Rarity('powers')]
class Psycos extends BaseTaxon
{
    use Power;
}
