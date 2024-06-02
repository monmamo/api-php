<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Jumping implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// [[fixed at monster creation]] [[movement]]
// variables:: Level

// power coefficient:: 100

// Requires anterior limbs that are capable of jumping.
// Depends on [Anterior Strength](https://www.notion.so/Anterior-Strength-0db997025fcd45ff969babae13c1d0d5?pvs=21).
