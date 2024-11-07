<?php

namespace App\Taxons;

use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[genus]] of phylum [[Rodentos]] with [[Quilos]]
#[NeuterName('Hystricon')]
#[MasculineAnthropeName('Hystricander')]
#[MasculineMonsterName('Hystricor')]
#[FeminineAnthropeName('Hystricquin')]
#[FeminineMonsterName('Hystrix')]
#[Gloss('Porcupine forms.')]
class Hystricos extends Rodentos
{
    public static function rarity(): float
    {
        return Rodentos::rarity() * 10;
    }

    public static function sizeDelta(): float
    {
        return 0.3;
    }
}
