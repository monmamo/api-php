<?php

namespace App\Taxons;

use App\Contracts\Taxon;

// 25% of all monsters.

final class Erectos implements Taxon
{
    public static function rarity(): float
    {
        return 4;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// [[posture morphotype]]

// Rarity:: 4

// image generation prompt:: [[needs representative image]]

// automatic traits:: [[Erect Posture]]
