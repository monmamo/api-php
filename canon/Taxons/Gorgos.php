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
use Canon\Taxons\Types\Morphotype;

#[Gloss('A morphotype that gives monsters large, fierce eyes.')]
#[NeuterName('Gorgon')]
#[MasculineAnthropeName('Gorgander')]
#[MasculineMonsterName('Gorgor')]
#[FeminineAnthropeName('Gorgquin')]
#[FeminineMonsterName('Gorguess')]
#[Rarity(100000)]
class Gorgos extends BaseTaxon
{
    use Morphotype;
}
