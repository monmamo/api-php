<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Trainable;

// variables:: Level

#[Gloss('A measure of a Monster\'s scent.')]

#[Trainable]

final class Odor implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
