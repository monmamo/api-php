<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// variables:: Level
// Determines how well an anthrope or monster can delight an audience with music, dance, acting, storytelling, or some other form of entertainment.

// A function of [[Charisma]] and this trait’s trained Level.

#[Trainable]
final class Performance implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
