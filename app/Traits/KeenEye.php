<?php

namespace App\Traits;

use App\Contracts\Feature;

final class KeenEye implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// variables:: Level

// Prevents other monsters from lowering accuracy.

// Ignore any Defense or effect that would reduce or prevent the damage done by this Monster.
