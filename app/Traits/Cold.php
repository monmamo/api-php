<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Cold implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Has a low body temperature and may have the ability to freeze water.
