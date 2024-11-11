<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Faunon')]
#[MasculineAnthropeName('Faunander')]
#[MasculineMonsterName('Faunor')]
#[FeminineAnthropeName('Faunquin')]
#[FeminineMonsterName('Fauness')]
class Faunos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// Goat-like biped with short [horns]([[Horns]])
// a tail:
// and hooves instead of feet.",species,400000,0.5,Capros ,Faunor,Fauness,
