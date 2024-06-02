<?php

namespace App\Skills;

use App\Contracts\Skill;
use App\GeneralAttributes\Requires;
use App\Taxons\Aquos;

#[Requires(Aquos::class)]
class AbsorbWater implements Skill
{
}
