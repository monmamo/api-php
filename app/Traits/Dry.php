<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Dry implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Dry skin, fur or hair.

// Requirement Incompatible with Damp, Moist, Wet.
// effect:: Resistance to Water attacks. Vulnerabiity to Fire attacks.
