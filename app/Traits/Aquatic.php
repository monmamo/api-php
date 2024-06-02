<?php

namespace App\Traits;

use App\Contracts\Feature;

// Can learn Water attacks but does not have the Aquos taxon.

// attribute group:: Aquatic

// These Monsters usually live in the water.

final class Aquatic implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
