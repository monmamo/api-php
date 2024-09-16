<?php

namespace App\Skills;

use App\Contracts\Skill;

class Heal implements Skill {}

//On each turn, if this monster is not [Confused]([[Confusion]]) or Hypnotized, remove 1u(Healing/100) Damage from this monster. (If the result of the roll is more Damage than this monster has, remove all Damage.)
