<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Throwing implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to pick up and throw objects.

// Requires Humanshape; Hand or Paw.
// effect:: Throw.
