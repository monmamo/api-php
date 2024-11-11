<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Vecton')]
#[MasculineAnthropeName('Vectander')]
#[MasculineMonsterName('Vector')]
#[FeminineAnthropeName('Vectquin')]
#[FeminineMonsterName('Vectess')]
class Vectos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// species of genus Hominos. Wight
// elf:
// wraith.",genus,Hominos ,
// [[Species]] of genus [[Hominos]]. Wight, elf, wraith.
// Alternates:
// Masculine:
// Vector
// Feminine:
// Vectess
// Attributes:

// rarity: {{calc: ((uuUwRY2_d)) * 5}}
// size delta: [[Hominos]] - 0.3
