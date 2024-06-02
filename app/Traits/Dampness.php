<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Dampness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Excretes water or other fluid that makes the Monster perpetually damp.
