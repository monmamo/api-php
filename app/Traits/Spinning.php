<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;

// variables:: Level

#[Gloss('Ability to use skills in the [[Spin skill group]].')]
final class Spinning implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
