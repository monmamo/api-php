<?php

namespace App\Skills;

use App\Contracts\Skill;

class Headbutt implements Skill {}

// [[Attack]]
//Choose one monster on the Battlefield. [[Damage]] X = 5u(Strength5×Skull60). If this attack does any [[Damage]], this monster is Confused (C=1uX).
//# playable card::

// Damage done to defender:: 1dSize + 1dSpeed

// Resolution phase:: If the result of this attack is any damage done to the targeted Monster, this Monster is Confused (C = amount of damage actually done).
