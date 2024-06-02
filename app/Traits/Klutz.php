<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Klutz implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// training cost:: [[negative cost]] -1 point per Level point
// variables:: Level

// The monster can't use any held items.
