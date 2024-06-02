<?php

namespace App\Traits;

use App\Contracts\Feature;

/**
 * Resolution phase:: If this Monster does any damage while it is [Confused]([[Confusion]]) (even to itself), it does 1d4 more damage.
 */
final class Frenzy implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
