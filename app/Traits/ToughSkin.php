<?php

namespace App\Traits;

use App\Contracts\Feature;

final class ToughSkin implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// variables:: Level

// Prevent 3 damage from attacks.
