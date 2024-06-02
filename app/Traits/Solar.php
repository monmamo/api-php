<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Solar implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Draws energy from the sun.
// attribute group:: Solar/Lunar

// effect:: Strength +(Cost*Sun/10000)% in Competition. Training in Sun +(Cost*Sun/10000)%.

// Can absorb and use solar energy.
// Excludes: [[Lunar]]
