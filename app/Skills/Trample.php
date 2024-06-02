<?php

namespace App\Skills;

use App\Contracts\Skill;
use App\GeneralAttributes\Trainable;

//Offensive.
//# playable card::

// This declaration counts as the Attack for all Monsters on this team.
// Resolution phase:: Roll and add up 1dSpeed for every Monster on this team that can attack. Divide that number by the number of Monsters in play that can be Attacked, rounding down. Each of those Monsters is Attacked for that amount of Damage and uses Dodge as its Defense.

#[Trainable]
class Trample implements Skill
{
}
