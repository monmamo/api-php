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
        return 1/30; //TODO
    }

    public static function sizeDelta(): float
    {
        return -0.5;
    }
}

// [[genus]] with [[Pronos]] form.
// Weasel-forms, badger-forms.


