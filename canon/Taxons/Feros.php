<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Feron')]
#[MasculineAnthropeName('Ferander')]
#[MasculineMonsterName('Feror')]
#[FeminineAnthropeName('Ferquin')]
#[FeminineMonsterName('Feress')]
class Feros extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// Monsters of the wild; impossible or difficult to domesticate.
// Alternates:
// Masculine:
// Ferr
// Feminine:
// Feress
// Attributes:
