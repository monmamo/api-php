<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;

// [[Species]] of genus [[Hominos]] with  [[Angelos]].
// Compare [[Cherubos]], [[Satanos]].
// Attributes:
// Requires: [[Angel Wings]]

// Emotional Strength:: 100
// Intelligence:: 100
// Spiritual Strength:: 100

#[NeuterName('Seraphon')]
#[MasculineAnthropeName('Seraphander')]
#[MasculineMonsterName('Seraphor')]
#[FeminineAnthropeName('Seraphquin')]
#[FeminineMonsterName('Seraphess')]
#[Rarity('winged-morphotypes')]
#[SizeDelta(Hominos::class, Angelos::class, 0.5)]

class Seraphos extends BaseTaxon
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
