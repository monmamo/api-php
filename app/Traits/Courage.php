<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Trainable;

#[Trainable]
#[Gloss('A quantification of a monster\'s bravery and hardiness.')]
final class Courage implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
