<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Requires;
use App\Taxons\Pronos;

// variables:: Length

// Excludes [[Erect Posture]].

#[Requires(Pronos::class)]
final class PronePosture implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
