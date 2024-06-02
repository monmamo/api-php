<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Vampiron')]
#[MasculineAnthropeName('Vampirander')]
#[MasculineMonsterName('Vampiror')]
#[FeminineAnthropeName('Vampirquin')]
#[FeminineMonsterName('Vampiress')]
class Vampiros implements Taxon
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

// species of genus Hominos with Demonos form.

// ,"Hominos , Demonos ",,,
// [[Species]] of genus [[Hominos]] with [[Demonos]] form.
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// rarity: {{calc: ((uuUwRY2_d))}} x [[Demonos]]
// size delta:  [[Hominos]] + [[Demonos]]
