<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Trainable;

#[Gloss('Uses excessive force when attacking.')]
#[Trainable]
final class Brutality implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// power coefficient:: 100
// Requirement Incompatible with Calm, Healing.
// Not the same as Furious.
// effect:: Attack *= exp(Brutal x Cruelty / 10000).
// Defense /= exp(Brutal x Cruelty / 10000).
// Cruelty training *= exp(Cost/100).
// Kindness training / exp(Cost/100).
