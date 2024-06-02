<?php

namespace App\Taxons;

use App\Contracts\Taxon;

// ,"Felos , Lupos , Lutros , Otarys ",,,
// [[posture morphotype]]

final class Pronos implements Taxon
{
    public static function rarity(): float
    {
        return 4 / 3;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
