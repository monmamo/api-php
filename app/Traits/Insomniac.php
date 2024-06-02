<?php

namespace App\Traits;

use App\Contracts\Feature;

final class Insomniac implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// absolute
// Resistance or immunity to being Hypnotized.

// effect:: When Hypnosis is applied to this Monster, reduce it by Cost%.

// Depending on a check based on cost, cannot be put to [[Sleep]] by the effect of an attack, defense or skill.
