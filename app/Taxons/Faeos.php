<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Faeon')]
#[MasculineAnthropeName('Faeander')]
#[MasculineMonsterName('Faeor')]
#[FeminineAnthropeName('Faequin')]
#[FeminineMonsterName('Faeess')]
class Faeos implements Taxon
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

// winged morphotype Fairy-forms
// generally smaller than normal:
// with a pygmy profile, butterfly-like wings, and no tail.",,Emphutos ,,,
// #[[winged morphotype]] Fairy-forms, generally smaller than normal, with a pygmy profile, butterfly-like wings, and no tail.
// Alternates:
// monster masculine: Faer
// monster feminine: Faess
// anthrope masculine: Faeander
// anthrope feminine: Faequin
// Attributes:

// [[Fairy Wings]]
// Prefers:
// rarity: 300000
// size delta: -1
