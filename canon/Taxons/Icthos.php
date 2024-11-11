<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

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
}
