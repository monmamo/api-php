<?php

namespace App\Traits;

use App\Contracts\Feature;

final class HighFrequency implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Can produce intense or high-frequency sound waves.
