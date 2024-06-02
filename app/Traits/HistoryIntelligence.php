<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// Ability to recall lore about historical events, legendary people, ancient kingdoms, past disputes, recent wars, and lost civilizations.
#[Trainable(1)]
final class HistoryIntelligence implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
