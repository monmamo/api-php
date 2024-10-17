<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Titanon')]
#[MasculineAnthropeName('Titanander')]
#[MasculineMonsterName('Titanor')]
#[FeminineAnthropeName('Titanquin')]
#[FeminineMonsterName('Titaness')]
class Titanos implements Taxon
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

// Giant forms.

// 3000000,2,,,,
// size morphotype:: Giant forms.
// Alternates:
// Masculine:
// Titanor
// Feminine:
// Titaness
// rarity:
// size delta: 1
