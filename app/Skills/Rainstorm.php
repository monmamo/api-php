<?php

namespace App\Skills;

use App\Contracts\Skill;

class Rainstorm implements Skill
{
}

//Reduce effect of [[Pyros]] skills by a factor of exp(Level/100). This effect lasts until the Battle ends or any monster uses another Weather skill.
