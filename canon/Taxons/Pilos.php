<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Pilon')]
#[MasculineAnthropeName('Pilander')]
#[MasculineMonsterName('Pilor')]
#[FeminineAnthropeName('Pilquin')]
#[FeminineMonsterName('Piless')]
class Pilos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// Monsters with thick hair or fur.

// ,
// [[Body Covering Form]]. Monsters with thick hair or fur.
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// [[Fur]]
