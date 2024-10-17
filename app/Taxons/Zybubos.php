<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Zybubon')]
#[MasculineAnthropeName('Zybubander')]
#[MasculineMonsterName('Zybubor')]
#[FeminineAnthropeName('Zybubquin')]
#[FeminineMonsterName('Zybubess')]
class Zybubos implements Taxon
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

// Fly-forms
// small in stature:
// with fly wings.",morphotype,-1.5,,,"Fly Wings  ",
// morphotype:: Fly-forms, small in stature, with fly wings.
// rarity: 20000
// size delta: -1.5
