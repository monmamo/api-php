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

#[Gloss('Gigantic forms.')]
#[NeuterName('Giganton')]
#[MasculineAnthropeName('Gigantander')]
#[MasculineMonsterName('Gigantor')]
#[FeminineAnthropeName('Gigantquin')]
#[FeminineMonsterName('Gigantess')]
#[Rarity(7e4)]
#[SizeDelta(1)]
class Gigantos extends BaseTaxon
{
    use SizeMorphotype;
}
