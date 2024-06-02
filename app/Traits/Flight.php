<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// Ability to fly above the ground.

// intangible, [[movement]],

// variables:: Speed
// effect:: Fly skill.

// The Monster must have an attribute that can get the Monster off the ground, such as Wings or Levitating.

#[Trainable]
final class Flight implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
