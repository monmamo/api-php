<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Grounded implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Low profile and improved ability to remain on or very close to the ground.

// Requirement Not applicable to Bug or Ghost.
// effect:: Height -Cost. Ground Defense.
