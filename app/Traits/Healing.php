<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Healing implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Has the ability to heal self and other monsters.
// Incompatible with the Furious feature.
