<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Cuteness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// [[fixed at monster creation]]
// Measure of how attractive and darling the Monster is, and how other Monsters and Characters will be enamored by it.

// Contact with this monster may cause infatuation.
// Not the same thing as [[Beauty]].
// Automatic for [[Carmos]] monsters. Not available for [[Gouros]] monsters.

// Cannot be attached to [[Gouros]] Monsters.

// If attacked, roll 1d4. If 1 or 2, the attack has no effect.
