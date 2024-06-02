<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Combustible implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to start fire.

// Requires [[Pyros]]; not given automatically by Pyros.
