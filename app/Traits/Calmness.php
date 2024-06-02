<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Calmness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to stay very calm even in trying situations

// power coefficient:: 100
// Requirement Incompatible with Furious, Brutal. Not the same as Peaceful.
// effect:: See note.
