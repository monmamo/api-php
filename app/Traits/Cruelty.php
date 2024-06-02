<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// A quantification of a monster's learned malevolent properties, including rudeness, lack of respect for others, impatience, etc.
// _Cruelty_ is a [[Monster]] [property](http://monmamo.wikidot.com/monster-properties) that measures a [[Monster]]'s malevolent properties, including rudeness, lack of respect for others (not to be confused with [[Respect]]), bad manners, impatience, etc.
// Cruelty is stored with an Accumulator, starting at zero and never decreasing. Cruelty can be offset by [[Kindness]], but once it is learned, it is not forgotten.
// Cruelty influences the Monster's [[Attack]] and [[Defense]]. The higher a Monster's Cruelty is, the more inclined it will be to attack. However, its decreased patience will diminish its ability to defend itself in battle.
#[Trainable]

final class Cruelty implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
