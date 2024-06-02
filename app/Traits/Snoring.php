<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Snoring implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Snores while asleep.

// Requires If this Monster is under [[Hypnosis]] and not under [[Paralysis]], increase the CompetitionNoiseLevel by this Monster's [[Level]].
