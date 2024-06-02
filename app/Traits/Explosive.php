<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Explosive implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Tends to explode.

// effect:: Selfdestruct.
// An explosion does not kill a Monster but could cause it to pass out and be removed from battle.
