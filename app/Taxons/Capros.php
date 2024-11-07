<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[genus]]
// Not to be confused with [[Faunos]].

#[Gloss('Goat-forms with horns, a tail and hooves')]
#[NeuterName('Capron')]
#[MasculineAnthropeName('Caprander')]
#[MasculineMonsterName('Capror')]
#[FeminineAnthropeName('Caprquin')]
#[FeminineMonsterName('Capress')]
class Capros implements Taxon
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
