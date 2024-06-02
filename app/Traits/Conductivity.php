<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Requires;
use App\Taxons\Energos;

// Whenever your opponent attaches an [[Electricity]] card from his or her hand to a Monster, if this Monster is not Asleep, that Monster takes 1d4 damage.
#[Requires(Energos::class)]
final class Conductivity implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
