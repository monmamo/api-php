<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Rodenton')]
#[MasculineAnthropeName('Rodentander')]
#[MasculineMonsterName('Rodentor')]
#[FeminineAnthropeName('Rodentquin')]
#[FeminineMonsterName('Rodentess')]
class Rodentos implements Taxon
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

// ,phylum
// ,:
// ,"Musos , Hystricos ",,,
// [[genus]]. Rodent-forms.
// Alternates:
// Masculine:
// Rodentor
// Rodentander
// Feminine:
// Rodentess
// Rodentquin
// Attributes:

// Make no assumption about size.
