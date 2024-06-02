<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// Ability to convincingly hide the truth, either verbally or through one’s actions.

// variables:: Level

// A function of [[Charisma]] and this trait’s trained Level.

// If this Monster uses a Defense, add 4 to any roll. (For example, 1d6 becomes 1d10.)
#[Trainable]

final class Deception implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
