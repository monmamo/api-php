<?php

namespace App\Skills;

use App\Contracts\Skill;

class Forcefield implements Skill {}

//Can use energy fields to deflect damage.
//X = 1u(Electricity/6)
//Defense = M(X)
//User Electricity -= X
