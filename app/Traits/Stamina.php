<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Trainable;

// variables:: Level
// #[[innate attribute]]

#[Trainable()]
#[Gloss('General resistance to attacks.')]

final class Stamina implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
