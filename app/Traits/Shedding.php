<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Shedding implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Sheds external anatomical material on a regular basis.

// Requires Skin, Fur, Hair, Quills or [[Scales/Scutes]].
