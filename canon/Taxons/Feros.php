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

#[Gloss('Monsters of the wild; impossible or difficult to domesticate.')]
#[NeuterName('Feron')]
#[MasculineAnthropeName('Ferander')]
#[MasculineMonsterName('Feror')]
#[FeminineAnthropeName('Ferquin')]
#[FeminineMonsterName('Feress')]
#[Rarity(100)]
class Feros extends BaseTaxon
{
    use Morphotype;
}
