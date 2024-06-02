<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;

#[Gloss('This Monster awakens quickly from sleep.')]
final class EarlyBird implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
