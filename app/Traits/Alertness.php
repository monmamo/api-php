<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Comment;
use App\GeneralAttributes\Gloss;

#[Gloss('Enhanced senses (either visual or otherwise) and patience.')]
#[Comment('Adds speed to attacks and defenses.')]
final class Alertness implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}

// power coefficient:: 100
// effect:: Mobility +Cost. Patience starts at Cost. Increment Capture requirement by Cost/4.
// variable:: Level
