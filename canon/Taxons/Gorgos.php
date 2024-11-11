<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// supertaxon:: [[Hominos]]

#[NeuterName('Gorgon')]
#[MasculineAnthropeName('Gorgander')]
#[MasculineMonsterName('Gorgor')]
#[FeminineAnthropeName('Gorgquin')]
#[FeminineMonsterName('Gorguess')]
class Gorgos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Hominos::rarity() * 100000;
    }

    public static function sizeDelta(): float
    {
        return Hominos::sizeDelta();
    }
}
