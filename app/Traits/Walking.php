<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Walking implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// training cost:: 1 unit per unit
// variables:: Speed

// Requires anterior features that support walking.
// The speed is how far the monster can walk on each turn.
// All creatures have a walking speed, simply called the monster’s speed. Creatures that have no form of ground-based locomotion have a walking speed of 0 feet.
