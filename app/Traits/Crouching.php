<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Requires;

// [[fixed at monster creation]]
// cost:: 2 per Level
// variables:: Level

// Neither requires nor excludes [[Erect Posture]] and [[Prone Posture]].

#[\App\GeneralAttributes\Gloss('Ability to crouch.')]
#[Requires(Limberness::class)]
final class Crouching implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
