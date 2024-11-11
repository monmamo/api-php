<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// ,Cherubos ,pygmy,

#[Gloss('Pygmy or diminutive forms.')]
#[NeuterName('Pygmyn')]
#[MasculineMonsterName('Pygmyr')]
#[FeminineMonsterName('Pygmyss')]
class Pygmys extends BaseTaxon
{
    public static function rarity(): float
    {
        return 4; // roughly 25% of all monsters
    }

    public static function sizeDelta(): float
    {
        return -1;
    }
}
