<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Trainable;

// variables:: Level

// A measure of a Monster's benevolent properties, including politeness, good manners, respect for others[1](javascript:;), generosity, etc.
// Kindness is stored with an Accumulator, starting at zero and never decreasing. Kindness can be offset by [Cruelty](http://monmamo.wikidot.com/cruelty), but once it is learned, it is not forgotten.
// Kindness influences the Monster's [[Attack]] and [[Defense]]. The higher a Monster's Kindness is, the less inclined it will be to attack. However, its increased patience will reinforce its ability to defend itself in battle.

// [1](javascript:;). Not to be confused with [Respect](http://monmamo.wikidot.com/respect).

#[Gloss('A quantification of a Monster\'s benevolent properties, including politeness, good manners, respect for others, generosity, etc.')]
#[Trainable]

final class Kindness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
