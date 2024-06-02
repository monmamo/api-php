<?php

namespace App\Traits;

use App\Contracts\Feature;

final class MultiplePersonality implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to have multiple Personalities.

// Requirement COST TODO.
// effect:: Monsters with this Trait can have multiple Personalities. Each Personality has its own set of Personality Accumulators that all start at zero. All Personalities share the Monster's Physical properties and Skills.
// A Monster with this Trait can develop a new Personality only during Training. The Monster can switch Personalities at any time.
// Each Personality must be trained separately.
