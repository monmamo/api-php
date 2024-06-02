<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Requires;
use App\Taxons\Floros;

// Ability to produce flowers.
// attribute group:: Botanical Attributes

#[Requires(Floros::class)]
final class Flowering implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
