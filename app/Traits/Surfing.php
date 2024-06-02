<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Surfing implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

//trainable
// Has the ability to surf on water.
// Can apply to some non-Water monsters.
