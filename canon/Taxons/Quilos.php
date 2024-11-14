<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\BodyCoveringMorphotype;

// , ,
// [[ Form]]. Covered in quills.
// Alternates:
// Masculine: Quilor
// Feminine: Quiless
// Attributes:
// Requires: [[Quills]]

#[NeuterName('Quilon')]
#[MasculineAnthropeName('Quilander')]
#[MasculineMonsterName('Quilor')]
#[FeminineAnthropeName('Quilquin')]
#[FeminineMonsterName('Quiless')]
#[Rarity('body-covering')]
#[SizeDelta(0.2)]
class Quilos extends BaseTaxon
{
    use BodyCoveringMorphotype;
}
