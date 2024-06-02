<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Muddy implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Can play with mud. An example of a Muddy skill is Mud-Slap.
