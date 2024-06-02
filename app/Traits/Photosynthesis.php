<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Photosynthesis implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to absorb and convert sunlight into energy.

// effect:: Strength +(Cost*Sun/100)% in Competition.
