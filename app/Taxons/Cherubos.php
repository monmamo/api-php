<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Cherubon')]
#[MasculineAnthropeName('Cherubander')]
#[MasculineMonsterName('Cherubor')]
#[FeminineAnthropeName('Cherubquin')]
#[FeminineMonsterName('Cherubess')]
class Cherubos implements Taxon
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

// supertaxons:: [[Hominos]] [[Angelos]] [[Pygmys]]

// ,"Hominos , Angelos , ",Eleanor Raindancer ,,,
// genus:: Pygmy angel-form hominid.
// Alternates:
// Masculine:
// Feminine:
// Attributes:
// Requires: [[Angel Wings]]
// rarity: 1000000
// size delta: -1
