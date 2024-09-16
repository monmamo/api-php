<?php

namespace App\Skills;

use App\Contracts\Skill;

class Amnesia implements Skill {}

//[[Attack]] [[Mental Mode]]

//If this monster is targeted for a direct Attack, calculate -(Cost*Psychic/100)ln(1u1). If less than this monster's Stamina, the Attack has no effect.
