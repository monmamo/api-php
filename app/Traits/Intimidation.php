<?php

namespace App\Traits;

use App\Contracts\Feature;

// Ability to influence another monster through overt threats, hostile combat, and physical violence.
// Lowers foes’ attack strengths.
// This Monster cannot use any Defenses, but prevents 1dSize damage if not Paralyzed, Hypnotized or Asleep.
final class Intimidation implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
