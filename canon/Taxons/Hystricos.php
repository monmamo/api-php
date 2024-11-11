<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

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
