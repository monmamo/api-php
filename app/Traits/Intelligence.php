<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// General mental acuity, accuracy of recall, and the ability to reason.

#[Trainable(1)]
final class Intelligence implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
