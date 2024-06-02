<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Expanding implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to expand to multiple times original size.

// Requirement INCOMPLETE
