<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Draining implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Can absorb energy or health from other monsters.

// Can use Defense Curl.
