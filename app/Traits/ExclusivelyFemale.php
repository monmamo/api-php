<?php

namespace App\Traits;

use App\Contracts\Feature;

final class ExclusivelyFemale implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Gives [[Female]].
// Excludes [[Male]], [[Exclusively Male]].
// ,
