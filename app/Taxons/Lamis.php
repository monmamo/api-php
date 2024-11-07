<?php

namespace App\Taxons;

use App\GeneralAttributes\Gloss;

// Requires: Demon Wings
// Rarity:: {{calc: ((uuUwRY2_d))}} x [[]] x 3

#[Gloss('[[Species]] of genus [[]] with [[Demonos]] form.')]
class Lamis extends Hominos
{
    public static function rarity(): float
    {
        return Hominos::rarity() * Demonos::rarity() * 3;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
