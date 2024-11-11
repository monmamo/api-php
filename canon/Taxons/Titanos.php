<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Titanon')]
#[MasculineAnthropeName('Titanander')]
#[MasculineMonsterName('Titanor')]
#[FeminineAnthropeName('Titanquin')]
#[FeminineMonsterName('Titaness')]
class Titanos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// Giant forms.

// 3000000,2,
// size morphotype:: Giant forms.
// Alternates:
// Masculine:
// Titanor
// Feminine:
// Titaness
// rarity:
// size delta: 1
