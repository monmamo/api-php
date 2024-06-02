<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Diurnal implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Tends to be more active during the day than during the night.
// attribute group:: [[Weather attribute group]]

// effect:: See Weather Factor.
