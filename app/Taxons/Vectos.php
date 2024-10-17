<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Vecton')]
#[MasculineAnthropeName('Vectander')]
#[MasculineMonsterName('Vector')]
#[FeminineAnthropeName('Vectquin')]
#[FeminineMonsterName('Vectess')]
class Vectos implements Taxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// species of genus Hominos. Wight
// elf:
// wraith.",genus,Hominos ,,,
// [[Species]] of genus [[Hominos]]. Wight, elf, wraith.
// Alternates:
// Masculine:
// Vector
// Feminine:
// Vectess
// Attributes:

// rarity: {{calc: ((uuUwRY2_d)) * 5}}
// size delta: [[Hominos]] - 0.3
