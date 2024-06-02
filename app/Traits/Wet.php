<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Wet implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Either must live in the water or continually secrete water and moisture.
// attribute group:: Aquatic
