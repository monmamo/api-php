<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Truslon')]
#[MasculineAnthropeName('Truslander')]
#[MasculineMonsterName('Truslor')]
#[FeminineAnthropeName('Truslquin')]
#[FeminineMonsterName('Trusless')]
class Truslos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// species of genus Hominos. Troll forms.
// [[genus]]
// ,Hominos ,
// [[Species]] of genus [[Hominos]]. Troll forms.
// Alternates:
// Masculine: Trusell
// Feminine: Trusless
// Attributes:

// Excludes:
// rarity: {{calc: ((uuUwRY2_d)) * 30}}
// size delta: ((qsC8F8tTR)) - 0.3
