<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[Gloss('Hooved quadrupeds that cannot be ridden.')]

#[NeuterName('Ungulon')]
#[MasculineMonsterName('Ungulor')]
#[FeminineMonsterName('Unguless')]
final class Ungulos implements Taxon
{
    public static function rarity(): float
    {
        return 100;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
