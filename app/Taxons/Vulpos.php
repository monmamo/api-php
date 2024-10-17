<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Vulpon')]
#[MasculineAnthropeName('Vulpander')]
#[MasculineMonsterName('Vulpor')]
#[FeminineAnthropeName('Vulpquin')]
#[FeminineMonsterName('Vulpess')]
class Vulpos implements Taxon
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

// [[genus]] of phylum [[Silvadys]] with [[Pronos]] form. Fox-forms.

// Alternates:
// Masculine:
// Vulpor
// Vulpander
// Feminine:
// Vulpess
// Vulpquin
// effect:: Tetrapod, Fur, Paw.
// size delta:
// image generation prompt:: foxlike, foxform

// Rarity:: [[Silvadys]] x 15
// requires: [[Fur]], [[Long Tail]]
// size delta:: [[Silvadys]]
// research material
// https://vulpesevolution.blogspot.com/
