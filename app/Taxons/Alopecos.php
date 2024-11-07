<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// A fox-like primate of the interior.

// Species:: of genus [[Canos]] with form [[Erectos]]

// image generation prompt:: foxlike, foxform
// requires: [[Fur]], [[Long Tail]]
#[NeuterName('Alopecon')]
#[MasculineAnthropeName('Alopecander')]
#[MasculineMonsterName('Alopecor')]
#[FeminineAnthropeName('Alopecquin')]
#[FeminineMonsterName('Alopex')]
class Alopecos implements Taxon
{
    public static function rarity(): float
    {
        return 200000;
    }

    public static function sizeDelta(): float
    {
        return Silvadys + 1;
    }
}
