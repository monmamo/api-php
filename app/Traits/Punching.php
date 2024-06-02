<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Punching implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Has forearms and developed hands.
// A monsters must have this feature in order to learn skills in the Punch group.

// Requires Humanshape, Arm, Hand.
// effect:: Punch attack.
