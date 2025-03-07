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
use Canon\Taxons\Types\Morphotype;

#[Gloss('Rideable quadrupeds.')]
#[NeuterName('Cabalon')]
#[MasculineAnthropeName('Cabalander')]
#[MasculineMonsterName('Cabalor')]
#[FeminineAnthropeName('Cabalquin')]
#[FeminineMonsterName('Cabaless')]
#[Rarity(100)]
#[SizeDelta(1)]
class Cabalos extends BaseTaxon
{
    use Morphotype;
}
