<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Requires;
use App\Taxons\Sonos;

// Monsters with this Trait have the ability to roar.
// attribute group:: Sonic
// Gives the attack "Roar" which does 3dSize damage.

#[Requires(Sonos::class)]
final class Roaring implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
