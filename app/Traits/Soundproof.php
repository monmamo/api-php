<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Soundproof implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Immunity to the noise in the environment and all [[Sonic Mode]] effects.
// attribute group:: Sonic

// effect:: Scale the effect of the Environment NoiseLevel in the AttackFactor and DefenseFactor by DF(Cost).
