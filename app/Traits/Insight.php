<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// Ability to determine the true intentions of a creature.
// Such as when searching out a lie or predicting someone’s next move.

#[Trainable(2)]
final class Insight implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
