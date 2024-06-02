<?php

namespace App\Traits;

use App\Contracts\Feature;

final class RelaxingScent implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// source or inspiration:: Erika's Ivysaur's "Relaxing Scent" power

// ---

// Reduce damage done by any attack by 3 points for each [[Fragrance]] card attached to this Monster.
