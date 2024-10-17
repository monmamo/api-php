<?php

namespace App\Taxons;

use App\Contracts\Taxon;

class Silvadys implements Taxon
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

// Carnivorous monsters of the forest.

// Prefers:
// [[Pronos]]
// [[Pilos]]
// Alternates:
// Masculine:  Silvadyr
// Feminine: Silvadyss
// Attributes:

// Prefers:
// [[Tail]]
// rarity: 2.5 in forested areas, 5 in unforested rural areas
