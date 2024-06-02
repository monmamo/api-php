<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Malevolent implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Monsters with this Trait have a natural inclination towards malevolent behavior.
// attribute group:: Volence

// effect:: Kindness training is less effective by Cost%.
