<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Aromatic implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// variables:: Level

// The ability of a monster to produce and control the emissions of its own fragrances and odors.
// Manifested as one of two complementary traits: [[Fragrance]] (benevolent) and [[Fetor]] (malevolent).
