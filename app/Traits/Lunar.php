<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Lunar implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Performs better when the moon is out.
// Excludes: [[Solar]]
// attribute group:: [[Weather attribute group]]

// effect:: Strength +(Cost*Moon/10000)% in Competition.
// Training in Moon +(Cost*Moon/10000)%.
