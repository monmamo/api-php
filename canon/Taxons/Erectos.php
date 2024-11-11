<?php

namespace Canon\Taxons;

final class Erectos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 4; // 25% of all monsters.
    }

    public static function sizeDelta(): float
    {
        return 1;
    }
}

// [[posture morphotype]]

// Rarity:: 4

// image generation prompt:: [[needs representative image]]

// automatic traits:: [[Erect Posture]]
