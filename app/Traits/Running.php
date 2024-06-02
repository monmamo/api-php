<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Running implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Ability to run.

// variables:: 100
// Requires Tetrapod or Humanshape.
// effect:: Run, Running Defense.
