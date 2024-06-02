<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Title;

// variables:: Level

#[Title('SelfSufficiency')]
final class SelfSufficiency implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
