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
use Canon\Taxons\Types\SpinalMorphotype;

#[Gloss('A taxon where plantlike forms grow from the monster or anthrope\'s back.')]
#[NeuterName('Anthron')]
#[MasculineAnthropeName('Anthrander')]
#[MasculineMonsterName('Anthror')]
#[FeminineAnthropeName('Anthrquin')]
#[FeminineMonsterName('Anthress')]
#[Rarity(Floros::class, 100)]
#[SizeDelta(Floros::class)]
class Anthros extends BaseTaxon
{
    use SpinalMorphotype;
}
