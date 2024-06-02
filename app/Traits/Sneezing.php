<?php

namespace App\Traits;

use App\Contracts\Feature;

// If this Monster would take damage from Pollen or Dust, and this Monster is not Paralyzed, prevent that damage.
final class Sneezing implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
