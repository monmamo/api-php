<?php

namespace App\Traits;

use App\Contracts\Feature;

final class NaturalHealing implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// ---
// Upkeep phase:: If this Monster is not Knocked Out, you may remove 1d4 damage from it.
