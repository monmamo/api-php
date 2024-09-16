<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Requires;
use App\Taxons\Floros;

// Removes damage from all Monsters on the Battlefield.

// UPKEEP:: Remove 1d4 damage from each Monster on the Battlefield (both yours and your opponents').

#[Requires(Floros::class)]

final class TherapeuticDander implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
