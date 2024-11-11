<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// Prefers: Capacitor
// Color: yellow

// Energy and electricity.

// yellow, electric, electricmonster, energymonster
// ,Calliope ,"Migal Tigerson , Marcy Meffitson ","yellow, electric",
// https://huggingface.co/datasets/monmamo/energos/tree/main

#[NeuterName('Energon')]
#[MasculineAnthropeName('Energander')]
#[MasculineMonsterName('Energor')]
#[FeminineAnthropeName('Energquin')]
#[FeminineMonsterName('Energess')]
class Energos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 85;
    }
}
