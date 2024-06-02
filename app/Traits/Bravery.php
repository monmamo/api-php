<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// effect:: Courage Training is Cost% more effective.

#[Trainable]
final class Bravery implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
