<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Requires;
use App\Taxons\Floros;

// Removes damage from all Monsters in play.

// Upkeep phase:: Remove 1d4 damage from each Monster in play (both yours and your opponents').

#[Requires(Floros::class)]

final class TherapeuticDander implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
