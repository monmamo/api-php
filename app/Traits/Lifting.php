<?php

namespace App\Traits;

use App\Contracts\Feature;

//  [[fixed at monster creation]]
// Ability to lift

// variables:: Level

// Requires appropriate posterior and anterior anatomy.
// Depends on both [[Carrying Capacity]] and [[Anterior Physical Strength]].
final class Lifting implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
