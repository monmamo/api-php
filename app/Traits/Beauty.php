<?php

namespace App\Traits;

use App\Contracts\Feature;
use App\GeneralAttributes\Trainable;

// [[intangible character attributes]]

// Effect doubled if the anthrope or monster has [[Carmos]].
// A measure of a Monster's physical appearance.
// While this statistic is trainable, it is not boundless. The Beauty statistic should not be much greater than the Monster's Level. The greater a Monster's Beauty exceeds its Level, the greater the Monster's [[Vanity]].
#[Trainable]
final class Beauty implements Feature
{
    public static function sizeDelta(): float
    {
        return 0;
    }
}
