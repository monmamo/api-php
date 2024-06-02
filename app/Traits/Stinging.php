<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Stinging implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to use Needles, Pins, Quills or a Stinger to sting an opponent.

// Requires Needles, Pins, Quills or Stinger.
