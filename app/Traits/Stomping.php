<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Stomping implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Has powerful legs that can stomp and trample.

// Requires Humanshape or Tetrapod.
// effect:: Weight +Cost/10. Mobility -Cost/10.
