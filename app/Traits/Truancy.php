<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Truancy implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// variables:: Level

// Monster cannot attack on consecutive turns.

// Command phase:: If this Monster is chosen to attack or be attacked, roll 1d4. If 1 or 2, this Monster cannot attack or be attacked on this turn.
