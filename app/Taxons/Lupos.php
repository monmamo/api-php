<?php

namespace App\Taxons;

use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[Species]] of genus [[]] with [[Pronos]] form.
// Attributes:
// effect:: Tetrapod, Fur, Paw.

// [[Alertness]]

// image generation prompt:: wolflike, wolfform

#[NeuterName('Lupon')]
#[MasculineAnthropeName('Lupander')]
#[MasculineMonsterName('Lupor')]
#[FeminineAnthropeName('Lupquin')]
#[FeminineMonsterName('Lupess')]
#[Gloss('Wolf-forms. Resembles a wolf or has wolflike properties.')]
class Lupos extends Canos
{
    public static function rarity(): float
    {
        return Canos::rarity() * 3;
    }

    public static function sizeDelta(): float
    {
        return 0.2;
    }
}
