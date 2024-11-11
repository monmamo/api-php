<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Satanon')]
#[MasculineAnthropeName('Satanander')]
#[MasculineMonsterName('Satanor')]
#[FeminineAnthropeName('Satanquin')]
#[FeminineMonsterName('Sataness')]
class Satanos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// species of genus Hominos with Demonos and Megos forms.

// ,"Hominos , Demonos , Megos ",
// [[Species]] of genus [[Hominos]] with [[Demonos]] and [[Megos]] forms.
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// rarity: {{calc: ((uuUwRY2_d))}} x [[Demonos]] x ((ZN7RF27RS))
// size delta: [[Hominos]] + [[Demonos]] + ((Tm13NKApe))
