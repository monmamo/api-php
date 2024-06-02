<?php

namespace App\Traits;

use App\Contracts\Feature;

/**
 * Personal success through demonstrating competence according to social standards.
 * Associated single values are: being ambitious, influential, capable, successful, intelligence, and having self-respect.
 * Boosts attack and defense.
 */
final class Achievement implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
