<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Requires;
use App\Taxons\Aquos;
use App\Taxons\Megos;

// variables:: Level

// Can pull large amounts of water out of lakes and rivers.
#[Requires(Megos::class)]
#[Requires(Aquos::class)]

final class Tidal implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
