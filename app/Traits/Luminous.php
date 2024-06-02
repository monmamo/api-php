<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Luminous implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Monsters with this Trait have the ability to emit light.
