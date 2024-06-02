<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Pollinating implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to produce and expel pollen.
