<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Tepid implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Has no ability to influence temperature.

// effect:: No cost. No effect. Default trait for species that don't have another Temperature Trait.
