<?php

namespace App\Skills;

use App\Contracts\Skill;

class AmnesiaStare implements Skill
{
}

//Choose one monster in play and calculate X=-100 ln(1u1). If X < Patience, that monster cannot use any Attacks, Defenses or Weather Skills during this turn.
