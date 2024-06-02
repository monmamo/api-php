<?php

namespace App\Skills;

use App\Contracts\Skill;

class SquirtAttack implements Skill
{
}

//Choose one monster in play. S = Amount in Supply. X = 1u(S/4). Damage = H(X). User Supply -= X.
