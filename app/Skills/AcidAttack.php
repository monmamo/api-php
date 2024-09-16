<?php

namespace App\Skills;

use App\Contracts\Skill;
use App\Features\AcidSupply;
use App\GeneralAttributes\Requires;
use App\SkillAttributes\Attack;

#[Attack]
#[Requires(AcidSupply::class)]
class AcidAttack implements Skill {}

//[[Physical Mode]]
//variables::
// Training Experience
// Battle Experience
//# playable card::
