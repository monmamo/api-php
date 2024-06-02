<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Malevolence implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Malevolence cancels out [[Benevolence]].

// ---
// Damage done to defender:: +1d6
// Damage done to self:: +1d6
