<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Suinon')]
#[MasculineAnthropeName('Suinander')]
#[MasculineMonsterName('Suinor')]
#[FeminineAnthropeName('Suinquin')]
#[FeminineMonsterName('Suiness')]
class Suinos implements Taxon
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

// Pig-forms.

// ,Ungulos ,April Workerbee ,,,
// [[genus]] of phylum [[Ungulos]] with [[Pronos]] form. Swine-forms.
// Alternates:
// Masculine:
// Suinor
// Suander
// Feminine:
// Suiness
// Suquin
// Attributes:
