<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Female implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Female gender. A monster must be either Male or Female.
