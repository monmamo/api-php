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
use Canon\Taxons\Types\SizeMorphotype;

#[Gloss('Titanic forms.')]
#[NeuterName('Titanon')]
#[MasculineAnthropeName('Titanander')]
#[MasculineMonsterName('Titanor')]
#[FeminineAnthropeName('Titanquin')]
#[FeminineMonsterName('Titaness')]
#[Rarity(1e7)]
#[SizeDelta(1.5)]
class Titanos extends BaseTaxon
{
    use SizeMorphotype;
}
