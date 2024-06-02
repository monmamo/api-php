<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Milking implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to produce [[Milk]].
