<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// [[movement]]

// variables:: Level
// Ability to avoid contact or interaction with another anthrope or monster.

// If this Monster uses Dodge, increase Speed by 6 before resolving.
#[Trainable]
final class Evasiveness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
