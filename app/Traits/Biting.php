<?php

namespace App\Traits;

use App\Contracts\Feature;

/**
 * Possesses sizeable teeth. Gives the Bite attack.
 */
final class Biting implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
