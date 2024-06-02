<?php

namespace App\Traits;

use App\Contracts\Feature;

//  movement trait
// Can swim in water.
// Requires appropriate anatomy.
// Depends on both Posterior Strength and Anterior Strength.

// variables:: Speed #trainable

// Can apply to some non-Water Monsters.
// effect:: [[Swim]] skill.

final class Swimming implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
