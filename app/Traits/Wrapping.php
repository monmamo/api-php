<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Wrapping implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
