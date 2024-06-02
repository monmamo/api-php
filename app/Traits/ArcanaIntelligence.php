<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// Ability to recall lore about spells, magic items, eldritch symbols, magical traditions, the planes of existence, and the inhabitants of those planes.
// There is no magic in MonMaMo. “Arcana” in the context of MonMaMo is any sort of secret or mysterious knowledge. A monster with Arcana Intelligence can understand things about training that other monsters cannot understand.
// A function of [[Intelligence]] and this trait’s trained Level.

#[Trainable(1)]
final class ArcanaIntelligence implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
