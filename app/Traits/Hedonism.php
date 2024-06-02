<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// Pleasure and sensuous gratification for oneself.
// Associated single values: Experiencing pleasure. Enjoying life.
#[Trainable()]
final class Hedonism implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
