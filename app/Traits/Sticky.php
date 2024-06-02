<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Sticky implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// variables:: 100
// effect:: [[Sticky Defense]].
