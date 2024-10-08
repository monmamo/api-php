<?php

namespace App\Skills;

use App\Contracts\Skill;
use App\SkillAttributes\Attack;

/**
 * Choose one monster on the Battlefield. Damage = H(Strength*Throwing/400). If the defender does not successfully defend, it will be inactive the next turn.
 */
#[Attack]
class ThrowMonster implements Skill {}
