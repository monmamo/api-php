<?php

namespace App\Taxons;

use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[Species]] of genus [[Hominos]].

#[NeuterName('Icthon')]
#[MasculineAnthropeName('Icthander')]
#[MasculineMonsterName('Icthor')]
#[FeminineAnthropeName('Icthquin')]
#[FeminineMonsterName('Icthess')]
#[Gloss('Amphibious fish-like anthropomorphs.')]
class Icthos extends Hominos
{
    public static function rarity(): float
    {
        return Hominos::rarity() * 500;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
