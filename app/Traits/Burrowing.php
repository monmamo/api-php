<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// training cost:: 2 units per unit of increase
// variables:: Speed

// power coefficient:: 100
// effect:: Burrow.

// Ability to burrow into and tunnel through the ground rapidly.
// A monster that has a burrowing speed can use that speed to move through sand, earth, mud, or ice. A monster can’t burrow through solid rock unless it has a special trait that allows it to do so.
// Requires posterior and anterior features that support burrowing.
#[Trainable]
final class Burrowing implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
