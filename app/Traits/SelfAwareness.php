<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Title;

// variables:: Level

#[Title('Self-Awareness')]
#[Gloss('A healthy sense of who one is.')]
final class SelfAwareness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
