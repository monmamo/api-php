<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Gorgon')]
#[MasculineAnthropeName('Gorgander')]
#[MasculineMonsterName('Gorgor')]
#[FeminineAnthropeName('Gorgquin')]
#[FeminineMonsterName('Gorgess')]
class Gorgos implements Taxon
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

// supertaxon:: [[Hominos]]
// Alternates:
// Masculine: Gorgor
// Feminine: Gorguess
// Attributes:
