<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Digging implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to dig into the ground.

// Requires appropriate anatomy.
// Gives ability to use [[Dig]] and use other Ground attacks but does not have [[Ground Mode]].
