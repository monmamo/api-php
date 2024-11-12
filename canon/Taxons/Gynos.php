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

#[Gloss('A trait in monsters that causes them to start off male when young and become female as they age.')]
#[NeuterName('Gynon')]
#[MasculineAnthropeName('Gynander')]
#[MasculineMonsterName('Gynor')]
#[FeminineAnthropeName('Gynquin')]
#[FeminineMonsterName('Gyness')]

#[Rarity(10e6)]
class Gynos extends BaseTaxon
{
    use Morphotype;
}
