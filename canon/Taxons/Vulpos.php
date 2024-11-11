<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Vulpon')]
#[MasculineAnthropeName('Vulpander')]
#[MasculineMonsterName('Vulpor')]
#[FeminineAnthropeName('Vulpquin')]
#[FeminineMonsterName('Vulpess')]
class Vulpos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
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
