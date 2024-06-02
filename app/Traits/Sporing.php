<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Sporing implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to produce and expel spores.
// attribute group:: Botanical Attributes
