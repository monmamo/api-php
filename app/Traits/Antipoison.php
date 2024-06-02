<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Antipoison implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Resistance or immunity to the effects of Poison.

// effect:: Scale down effects of Poison by e(Cost/100).
