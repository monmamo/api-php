<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// [[Species]] of genus [[Canos]] with [[Erectos]] form.

#[MasculineMonsterName('Lycor')]
#[FeminineAnthropeName('Lyx')]

// image generation prompt:: wolflike, wolfform
// (compare [[Lupos]]).

#[Gloss('Erect wolf-forms.')]
#[NeuterName('Lycon')]
#[MasculineAnthropeName('Lycander')]
#[MasculineMonsterName('Lycor')]
#[FeminineAnthropeName('Lycquin')]
#[FeminineMonsterName('Lycess')]
class Lycos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Canos::rarity() * Erectos::rarity() * 5;
    }

    public static function sizeDelta(): float
    {
        return Canos::sizeDelta() + Erectos::sizeDelta() + 0.3;
    }
}

// rarity:
