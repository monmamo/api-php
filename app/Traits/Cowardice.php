<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Cowardice implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// ---
// The effect of this card can't be used the turn you put this Monster into play or if this Monster is Confused, Paralyzed, Hypnotized or Asleep.
// Upkeep phase:: You may return this Monster to your hand. (Discard all cards attached to this Monster.)
