<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Trainable;

// malevolent

// attribute group:: Sonic

#[Trainable]
#[Gloss('Unpleasant-sounding voice.')]
final class Cacophony implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
