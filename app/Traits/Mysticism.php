<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Mysticism implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// effect:: Spirit Training is Cost% more effective.
