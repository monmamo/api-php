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

// derived power:  A subtaxon of [[Venenos]].
// Musk glands near the anus that spray. A white stripe from head to tail, which indicates that the anthrope or monster is Meffiton.
// "Marcy Meffitson , Lester Meffitson , John Welcome Meffitson

#[Gloss('Skunk powers.')]
#[NeuterName('Meffiton')]
#[MasculineAnthropeName('Meffitander')]
#[MasculineMonsterName('Meffitor')]
#[FeminineAnthropeName('Meffitquin')]
#[FeminineMonsterName('Meffitess')]
#[Rarity('powers')]
class Meffitos extends BaseTaxon
{
    use Power;
}
