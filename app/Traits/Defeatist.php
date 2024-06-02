<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Defeatist implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// cost:: [[negative cost]]
// variables:: Level

// Lowers stats when HP drops below half.
