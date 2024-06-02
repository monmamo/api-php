<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[morphotype]] [[winged morphotype]]

// Rarity::

// automatic features:: [[Butterfly Wings]]
#[Gloss('Butterfly-form.')]

#[NeuterName('Papilon')]

#[MasculineMonsterName('Papilor')]

#[FeminineMonsterName('Papiless')]

#[NeuterName('Papilon')]
#[MasculineAnthropeName('Papilander')]
#[MasculineMonsterName('Papilor')]
#[FeminineAnthropeName('Papilquin')]
#[FeminineMonsterName('Papiless')]
class Papilos implements Taxon
{
    public static function rarity(): float
    {
        return 400000;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
