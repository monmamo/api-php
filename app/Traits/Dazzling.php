<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Dazzling implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Protects the monster from high-priority moves.
