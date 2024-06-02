<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Screeching implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to emit high-pitched screams.
// attribute group:: Sonic

// Requires Sonic.
// effect:: Screech.
