<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Stickiness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// ---
// For any attempt to remove an Item from this Monster, the attempt succeeds only if 1d4 equals 4.
