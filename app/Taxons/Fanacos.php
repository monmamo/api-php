<?php

namespace App\Taxons;

use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// A fox-like body style characterized by large ears.
// Compare [[Vulpos]], [[Alopecos]].
// image generation prompt:: foxlike, foxform
// requires: [[Fur]], [[Long Tail]]


#[NeuterName('Fanacon')]
#[MasculineAnthropeName('Fanacander')]
#[MasculineMonsterName('Fanacor')]
#[FeminineAnthropeName('Fanacquin')]
#[FeminineMonsterName('Fanax')]
class Fanacos extends Silvadys
{
    public static function rarity(): float
    {
        return 20000;
    }

    public static function sizeDelta(): float
    {
        return parent::sizeDelta() + 1;
    }
}
