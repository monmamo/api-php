<?php

namespace App\Traits;

use App\Contracts\Feature;

final class LongReach implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// The monsters uses its moves without making contact with the target.

// Add 3 damage to this Monster's Attack.
