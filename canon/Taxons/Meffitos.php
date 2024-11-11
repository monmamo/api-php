<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// derived power: Skunk powers. A subtaxon of [[Venenos]].
// Musk glands near the anus that spray. A white stripe from head to tail, which indicates that the anthrope or monster is Meffiton.

// ,Venenos ,"Marcy Meffitson , Lester Meffitson , John Welcome Meffitson ",Meffitander ,Meffitor,Meffitquin,Meffitess,Meffitander,"",Meffiton,

#[NeuterName('Meffiton')]
#[MasculineAnthropeName('Meffitander')]
#[MasculineMonsterName('Meffitor')]
#[FeminineAnthropeName('Meffitquin')]
#[FeminineMonsterName('Meffitess')]
class Meffitos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Venenos::rarity() * 20;
    }

    public static function sizeDelta(): float
    {
        return Venenos::sizeDelta();
    }
}
