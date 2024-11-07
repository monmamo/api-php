<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Requires;
use App\GeneralAttributes\Trainable;
use App\Taxons\Sonos;

// Excludes [[Cacophony]].

#[Gloss('Pleasing voice.')]
#[Trainable]
#[Requires(Sonos::class)]
final class Euphony implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
