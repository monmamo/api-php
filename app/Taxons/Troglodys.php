<?php

namespace App\Taxons;

use App\Contracts\Taxon;

class Troglodys implements Taxon
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

// species of genus Hominos. Cave-dwelling hominid.
// [[genus]]
// ,Hominos ,,,
// [[Species]] of genus [[Hominos]]. Cave-dwelling hominid.
// Alternates:
// Masculine:
// Troglodyr
// Feminine:
// Troglodyss
// Attributes:

// rarity: {{calc: ((uuUwRY2_d)) * 5}}
// size delta: ((qsC8F8tTR))
