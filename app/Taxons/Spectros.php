<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Spectron')]
#[MasculineAnthropeName('Spectrander')]
#[MasculineMonsterName('Spectror')]
#[FeminineAnthropeName('Spectrquin')]
#[FeminineMonsterName('Spectress')]
class Spectros implements Taxon
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
