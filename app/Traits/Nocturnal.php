<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Nocturnal implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Tends to be more active at night than during the day.
// attribute group:: Weather

// effect:: See Weather Effects.
// attribute group:: [[Weather attribute group]]
