<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;

#[Gloss('Can produce and expel [[Ink]].')]
// attribute group:: Modal Attributes

// variables:: Level

final class Inking implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
