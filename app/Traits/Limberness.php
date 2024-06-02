<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Limberness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Is flexible and can bend easily. Reacts to attacks in less time than other monsters.
// [[fixed at monster creation]]

// Excludes [[Sturdiness]].
// Limber monsters cannot be Paralyzed.

// If attacked, prevent 1d6 additional damage.
