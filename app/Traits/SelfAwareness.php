<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Title;

#[Title('Self-Awareness')]

#[Gloss('A healthy sense of who one is.')]

// variables:: Level

final class SelfAwareness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
