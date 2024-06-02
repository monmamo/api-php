<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Camouflage implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// The ability to change colors to match those of the environments.
// chromatic

// attribute group:: Chromatism

// effect:: Defense +Cost%

// Defense prevents 3 additional damage.
