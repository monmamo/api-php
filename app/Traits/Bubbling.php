<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Bubbling implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Can produce large amounts of water bubbles.
// attribute group:: Aquatic

// effect:: Bubble.
