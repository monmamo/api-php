<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[genus]] with [[Pronos]] form

#[Gloss('Seal-forms.')]

#[NeuterName('Otaryn')]
#[MasculineAnthropeName('Otaryander')]
#[MasculineMonsterName('Otaryr')]
#[FeminineAnthropeName('Otaryquin')]
#[FeminineMonsterName('Otaryss')]

class Otarys implements Taxon
{
    public static function rarity(): float
    {
        return 100000;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
