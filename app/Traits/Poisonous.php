<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Requires;
use App\Taxons\Venenos;

// Secretions from this Monster are poisonous.

// effect:: Physical contact with this Monster causes Damage. Physical attacks by this Monster cause [Cost]% more Damage.

#[Requires(Venenos::class)]
final class Poisonous implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
