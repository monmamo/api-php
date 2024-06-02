<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Hot implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Has a high body temperature and may have the ability to boil water.
// attribute group:: Temperature Traits
