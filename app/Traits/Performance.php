<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// variables:: Level
// 

// A function of [[Charisma]] and this trait’s trained Level.
#[\App\GeneralAttributes\Gloss('Determines how well an anthrope or monster can delight an audience with music, dance, acting, storytelling, or some other form of entertainment.')]
#[Trainable]
final class Performance implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
