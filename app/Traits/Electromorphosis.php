<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Electromorphosis implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// [[fixed at monster creation]]
// cost:: 3 units per unit increase in Level
// variables:: Level
// Multiplies power of the next Electric-type move when hit by an attack.
