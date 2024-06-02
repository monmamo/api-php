<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Slimy implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Produces slimy emissions.
// [[defensive feature, trait or skill]]
