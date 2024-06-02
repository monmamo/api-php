<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// Enhanced ability to stay on one’s feet in tricky situations.
// A function of [[Mobility]], [[Elusiveness]] and [[Evasiveness]].
// Also gives ability to perform acrobatic stunts.

#[Trainable]
final class Acrobatics implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
