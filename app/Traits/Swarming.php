<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Swarming implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Can fly rapidly around an object, and fly together in clusters.

// variables:: 100
// Requires Size <= -1000. Mobility >= 1000. Cost >= 30.
