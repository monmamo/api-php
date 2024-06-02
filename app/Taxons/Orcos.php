<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Orcon')]
#[MasculineAnthropeName('Orcander')]
#[MasculineMonsterName('Orcor')]
#[FeminineAnthropeName('Orcquin')]
#[FeminineMonsterName('Orcess')]
class Orcos implements Taxon
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

// Short, brutish bipeds.
// https://huggingface.co/datasets/monmamo/orcos

// [[Species]] of genus [[Hominos]].
// Alternates:
// Masculine:
// Orcor
// Orcander
// Feminine:
// Orckess
// Orcquin
// Attributes:

// rarity: 100000
// size delta: ((qsC8F8tTR))
