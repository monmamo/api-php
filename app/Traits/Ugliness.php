<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Ugliness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Monsters with this Trait are unpleasant to see, and other Monsters and Characters (other than other Ugly Monsters) will be repulsed by it.
// attribute group:: Beauty
