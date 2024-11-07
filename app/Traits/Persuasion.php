<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Gloss;
use App\GeneralAttributes\Trainable;

// variables:: Level
// A function of [[Charisma]] and this trait’s trained Level.

#[Gloss('Ability to influence someone or a group of people with tact, social graces, or good nature.')]
#[Trainable]
final class Persuasion implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
