<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Seraphon')]
#[MasculineAnthropeName('Seraphander')]
#[MasculineMonsterName('Seraphor')]
#[FeminineAnthropeName('Seraphquin')]
#[FeminineMonsterName('Seraphess')]
class Seraphos implements Taxon
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

// [[Species]] of genus [[Hominos]] with  [[Angelos]].
// Compare [[Cherubos]], [[Satanos]].
// Alternates:
// Masculine: Seraphor
// Feminine: Seraphess
// Attributes:
// Requires: [[Angel Wings]]
// rarity: {{calc: ((uuUwRY2_d)) * 20}}

// Emotional Strength:: 100
// Intelligence:: 100
// Spiritual Strength:: 100
// Assets:
// Flaws:
