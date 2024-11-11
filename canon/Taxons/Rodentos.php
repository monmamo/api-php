<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Rodenton')]
#[MasculineAnthropeName('Rodentander')]
#[MasculineMonsterName('Rodentor')]
#[FeminineAnthropeName('Rodentquin')]
#[FeminineMonsterName('Rodentess')]
class Rodentos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// ,phylum
// ,:
// ,"Musos , Hystricos ",
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
