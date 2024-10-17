<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Energon')]
#[MasculineAnthropeName('Energander')]
#[MasculineMonsterName('Energor')]
#[FeminineAnthropeName('Energquin')]
#[FeminineMonsterName('Energess')]
class Energos implements Taxon
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

// essential power:: Energy and electricity.
// Alternates:
// Masculine:
// Energor, Energander
// Feminine:
// Energess, Energquin
// Attributes:

// Prefers: Capacitor
// Color: yellow
// rarity: 150000

// Energy and electricity.

// yellow, electric, electricmonster, energymonster
// ,,,,Calliope ,"Migal Tigerson , Marcy Meffitson ",,,,,,,"yellow, electric",,
// https://huggingface.co/datasets/monmamo/energos/tree/main
