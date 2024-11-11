<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// genus:: Imp.
// image generation prompt:: [[needs representative image]]

#[NeuterName('Emphuton')]
#[MasculineAnthropeName('Emphutander')]
#[MasculineMonsterName('Emphutor')]
#[FeminineAnthropeName('Emphutquin')]
#[FeminineMonsterName('Emphutess')]
class Emphutos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Hominos::rarity() * Faeos::rarity();
    }

    public static function sizeDelta(): float
    {
        return Hominos::sizeDelta() + Faeos::sizeDelta();
    }
}
