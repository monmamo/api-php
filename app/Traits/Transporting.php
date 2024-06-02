<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Transporting implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to transport a human being

// Requires MonsterSizeFactor must be at least +1000 for this Trait to have any effect.
// Not available to Bug, Ghost, and Humanshape Monsters.
