<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Spectron')]
#[MasculineAnthropeName('Spectrander')]
#[MasculineMonsterName('Spectror')]
#[FeminineAnthropeName('Spectrquin')]
#[FeminineMonsterName('Spectress')]
class Spectros extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// [[Species]] of genus [[Hominos]]. Zombie-like anthropomorph of low intelligence but high power.
// [[genus]]
// Alternates:
// Masculine: Specter
// Feminine: Spectress
// Attributes:

// rarity: {{calc: ((uuUwRY2_d)) * 5}}
// size delta: ((qsC8F8tTR)) - 0.3

// Emotional Strength:: 25
// Intelligence:: 25
// Spiritual Strength:: 0
