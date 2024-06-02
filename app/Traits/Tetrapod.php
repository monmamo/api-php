<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Tetrapod implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Having a torso supported by four legs.
// attribute group:: Bodies

// effect:: Cannot have Arm.
