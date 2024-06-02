<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Powdering implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to produce and secrete Powder.
// attribute group:: Modal Attributes
