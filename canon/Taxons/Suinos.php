<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Suinon')]
#[MasculineAnthropeName('Suinander')]
#[MasculineMonsterName('Suinor')]
#[FeminineAnthropeName('Suinquin')]
#[FeminineMonsterName('Suiness')]
class Suinos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// Pig-forms.

// ,Ungulos ,April Workerbee ,
// [[genus]] of phylum [[Ungulos]] with [[Pronos]] form. Swine-forms.
// Alternates:
// Masculine:
// Suinor
// Suander
// Feminine:
// Suiness
// Suquin
// Attributes:
