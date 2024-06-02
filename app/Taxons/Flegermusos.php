<?php

namespace App\Taxons;

use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[Species]] of genus [[Musos]] with [[Flegeros]] form.

#[Gloss('Flying mouse form, bat form.')]
#[NeuterName('Flegermuson')]
#[MasculineMonsterName('Flegermusor')]
#[FeminineMonsterName('Flegermusess')]
class Flegermusos extends Musos
{
    public static function rarity(): float
    {
        return parent::rarity() * 20;
    }

    public static function sizeDelta(): float
    {
        return parent::sizeDelta() + 0.25;
    }
}
