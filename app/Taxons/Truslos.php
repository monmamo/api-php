<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Truslon')]
#[MasculineAnthropeName('Truslander')]
#[MasculineMonsterName('Truslor')]
#[FeminineAnthropeName('Truslquin')]
#[FeminineMonsterName('Trusless')]
class Truslos implements Taxon
{
    public static function rarity(): float
    {
        return TODO;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// species of genus Hominos. Troll forms.
// [[genus]]
// ,Hominos ,,,
// [[Species]] of genus [[Hominos]]. Troll forms.
// Alternates:
// Masculine: Trusell
// Feminine: Trusless
// Attributes:

// Excludes:
// rarity: {{calc: ((uuUwRY2_d)) * 30}}
// size delta: ((qsC8F8tTR)) - 0.3
