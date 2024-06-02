<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Kicking implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Has developed legs that can kick.

// power coefficient:: 100
// Requirement [[Humanshape]] or Tetrapod. Hoof or Foot.
// effect:: Kick skill.
// A monster must have this feature to learn skills in the Kick group.
