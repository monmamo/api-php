<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Monochrome implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// One uniform color across the body.
// attribute group:: Chromatism
