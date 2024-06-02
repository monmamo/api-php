<?php

namespace App\Traits;

use App\Contracts\Feature;

final class ExclusivelyMale implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// [[fixed at monster creation]]

// Gives [[Male]].
// Excludes [[Female]], [[Exclusively Female]].
