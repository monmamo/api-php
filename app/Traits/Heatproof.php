<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Heatproof implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// variables:: Level

// Reduces the damage done by Fire-type moves.
