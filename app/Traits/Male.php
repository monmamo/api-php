<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Male implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Male gender. A monster must be either Male or Female. Male monsters cannot conceive offspring.
