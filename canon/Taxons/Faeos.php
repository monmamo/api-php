<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// winged morphotype Fairy-forms
// generally smaller than normal:
// with a pygmy profile, butterfly-like wings, and no tail.",Emphutos ,
// #[[winged morphotype]] Fairy-forms, generally smaller than normal, with a pygmy profile, butterfly-like wings, and no tail.

// [[Fairy Wings]]

#[NeuterName('Faeon')]
#[MasculineAnthropeName('Faeander')]
#[MasculineMonsterName('Faer')]
#[FeminineAnthropeName('Faequin')]
#[FeminineMonsterName('Faess')]
class Faeos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 300000;
    }

    public static function sizeDelta(): float
    {
        return -1;
    }
}
