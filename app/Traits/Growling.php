<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Growling implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to growl in a manner that is distinctive and often scary.
// attribute group:: Sonic

// effect:: Sonic, Growl.

// Gives the attack "Growl" which does 2dSize damage.
