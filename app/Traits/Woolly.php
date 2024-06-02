<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Woolly implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// The monster has wool or thick fur covering the majority of its body.
// Requires certain species.
