<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Oblivious implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to make oneself less noticeable to other Monsters.

// effect:: In Breeding and other areas where the AttractionFactor is figured for a Monster with Oblivious, scale down the effect of the other Monster's Cute or Ugly by eCost/25.
// In Competition, scale down the effect to opponents' Cute or Ugly by eCost/25.

// Immune to [[Carmos]]  or attraction-based skills.
// Automatic with [[Asexuality]].
