<?php
namespace App\Skills;

use App\GeneralAttributes\Requires;


use App\SkillAttributes\Attack;

#[Attack]
#[Requires(\App\Features\AcidSupply::class)]
class AcidAttack implements \App\Contracts\Skill {}

//[[Physical Mode]]
//variables::
// Training Experience
// Battle Experience
//# playable card::

