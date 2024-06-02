<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Putrid implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// [[fixed at monster creation]]

// variables:: Level

// Has a naturally-repulsive odor.
// Gives a default [[Fetor]].
