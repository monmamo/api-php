<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Flexibility implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Can bend and flex but cannot stretch.
// attribute group:: [[Malleability]]

// effect:: TODO
