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

#[NeuterName('Megon')]
#[MasculineAnthropeName('Megander')]
#[MasculineMonsterName('Megor')]
#[FeminineAnthropeName('Megquin')]
#[FeminineMonsterName('Megess')]
#[Gloss('Large forms.')]
#[NeuterName('Megon')]
#[MasculineAnthropeName('Megander')]
#[MasculineMonsterName('Megor')]
#[FeminineAnthropeName('Megquin')]
#[FeminineMonsterName('Megess')]
#[Rarity(200)]
#[SizeDelta(0.5)]
class Megos extends BaseTaxon
{
    use SizeMorphotype;
}
