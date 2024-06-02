<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// Ability to look around for clues and make deductions based on those clues.
// A monster might deduce the location of a hidden object, discern from the appearance of a wound what kind of weapon dealt it, or determine the weakest point in a tunnel that could cause it to collapse. Poring through ancient scrolls in search of a hidden fragment of knowledge might also call for an Intelligence (Investigation) check.
// A function of [[Intelligence]] and this trait’s trained Level.

#[Trainable(1)]

final class InvestigationIntelligence implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
