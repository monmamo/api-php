<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Vampiron')]
#[MasculineAnthropeName('Vampirander')]
#[MasculineMonsterName('Vampiror')]
#[FeminineAnthropeName('Vampirquin')]
#[FeminineMonsterName('Vampiress')]
class Vampiros extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// species of genus Hominos with Demonos form.

// ,"Hominos , Demonos ",
// [[Species]] of genus [[Hominos]] with [[Demonos]] form.
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// rarity: {{calc: ((uuUwRY2_d))}} x [[Demonos]]
// size delta:  [[Hominos]] + [[Demonos]]
