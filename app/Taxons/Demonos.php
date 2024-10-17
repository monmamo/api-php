<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Demonon')]
#[MasculineAnthropeName('Demonander')]
#[MasculineMonsterName('Demonor')]
#[FeminineAnthropeName('Demonquin')]
#[FeminineMonsterName('Demoness')]
class Demonos implements Taxon
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

// 9000,0.3,"Satanos , Vampiros , Lamis ",Demonor,Demonquin,Demoness,Demonander,Demonon,
// morphotype:: Demon-forms.
// Alternates:
// Masculine:
// Feminine: Demoness
// Plural:
// Attributes:
// long, powerful tail
// weak wings
// long horns
// [[Path of Luxury (Chaotic Evil)]]
// Requires: Demon Wings, [[Long Tail]]
// Excludes: [[Angelos]], [[Faeos]], [[Zybubos]]
