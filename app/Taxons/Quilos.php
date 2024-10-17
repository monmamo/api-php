<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Quilon')]
#[MasculineAnthropeName('Quilander')]
#[MasculineMonsterName('Quilor')]
#[FeminineAnthropeName('Quilquin')]
#[FeminineMonsterName('Quiless')]
class Quilos implements Taxon
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

// Covered in quills.

// ,Hystricos ,,,
// [[Body Covering Form]]. Covered in quills.
// Alternates:
// Masculine: Quilor
// Feminine: Quiless
// Attributes:
// Requires: [[Quills]]
// rarity: 2000
// size delta: 0.2
