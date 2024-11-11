<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

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
        return Canos::sizeDelta() + 0.2;
    }
}
