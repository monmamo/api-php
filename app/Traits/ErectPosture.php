<?php

namespace App\Traits;

use App\Contracts\Feature;

final class ErectPosture implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// variables:: Height

// Requires [[Erectos]]
// Excludes [[Prone Posture]]
// Enables skills that depend on height.
