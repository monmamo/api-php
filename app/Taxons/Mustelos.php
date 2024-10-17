<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Mustelon')]
#[MasculineAnthropeName('Mustelander')]
#[MasculineMonsterName('Mustelor')]
#[FeminineAnthropeName('Mustelquin')]
#[FeminineMonsterName('Musteless')]
class Mustelos implements Taxon
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

// [[genus]] with [[Pronos]] form.
// Weasel-forms, badger-forms.
// Alternates:
// Masculine:
// Mustelor
// Mustelander
// Feminine:
// Musteless
// Mustelquin
// Attributes:

// Prefers:
// size delta: -0.5
