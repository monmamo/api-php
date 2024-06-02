<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// [[intangible character attributes]]

// Control or dominance over people and resources.
// As a monster trait, requires [[Regos]].
// For the [[Guardian Supervisor (ESTJ)]], rank has its obligations, but it also has its privileges.
// As leaders, they are comfortable issuing orders, so demands, commands, requests, and directions come easily from them.
// In every social system, whether it is in the home, or in an enterprise, these tough and outspoken authoritarians insist that each member has an assigned position in a hierarchy.
// Supervisors ascribe title, position, expertise, experience, and time served with esteem and respect.
#[Trainable]

final class Authority implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
