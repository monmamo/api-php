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
        return Hominos::rarity() * 20;
    }

    public static function sizeDelta(): float
    {
        return Hominos::sizeDelta() + Angelos::sizeDelta();
    }
}

// [[Species]] of genus [[Hominos]] with  [[Angelos]].
// Compare [[Cherubos]], [[Satanos]].
// Attributes:
// Requires: [[Angel Wings]]

// Emotional Strength:: 100
// Intelligence:: 100
// Spiritual Strength:: 100
