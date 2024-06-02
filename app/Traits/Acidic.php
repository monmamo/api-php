<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Acidic implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// Produces and secretes Acid.
// attribute group:: Modal Attributes

// effect:: Physical contact with this Monster causes Damage. Physical attacks by this Monster cause [Cost]% more Damage (2Cost% if Metallic or Armor).
