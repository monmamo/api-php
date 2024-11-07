<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;
// [[Power]]. Sound.
// Sound.
#[NeuterName('Sonon')]
#[MasculineAnthropeName('Sonander')]
#[MasculineMonsterName('Sonor')]
#[FeminineAnthropeName('Sonquin')]
#[FeminineMonsterName('Soness')]
class Sonos implements Taxon
{
    public static function rarity(): float
    {
        return 70000; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
