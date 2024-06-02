<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Smoky implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Produces smoky emissions.
// Not the same as Gaseous feature.
