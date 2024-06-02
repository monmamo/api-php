<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Bioluminescence implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// [[fixed at monster creation]]

// Ability to produce light.
// Required [[Lumos]].
