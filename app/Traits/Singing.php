<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Singing implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to sing.
// power coefficient::
// cost::
// variables::
// effect:: If Monster also has Musical, Lullaby. Otherwise Song.
