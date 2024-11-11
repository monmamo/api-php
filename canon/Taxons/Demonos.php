<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

//"Satanos , Vampiros , Lamis "
// long, powerful tail
// weak wings
// long horns
// [[Path of Luxury (Chaotic Evil)]]
// Requires: Demon Wings, [[Long Tail]]
// Excludes: [[Angelos]], [[Faeos]], [[Zybubos]]
#[Gloss('Demon-forms.')]
#[NeuterName('Demonon')]
#[MasculineAnthropeName('Demonander')]
#[MasculineMonsterName('Demonor')]
#[FeminineAnthropeName('Demonquin')]
#[FeminineMonsterName('Demoness')]
class Demonos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 9000;
    }

    public static function sizeDelta(): float
    {
        return 0.3;
    }
}
