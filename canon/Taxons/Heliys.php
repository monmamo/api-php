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

#[Gloss('Attacks improve on sunny days.')]
#[NeuterName('Heliyn')]
#[MasculineAnthropeName('Heliyander')]
#[MasculineMonsterName('Heliyr')]
#[FeminineAnthropeName('Heliyquin')]
#[FeminineMonsterName('Heliyss')]
#[Rarity(1000)]
class Heliys extends BaseTaxon
{
    use Morphotype;
}
