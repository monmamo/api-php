<?php

namespace App\Skills;

use App\Contracts\Skill;

class Evasion implements Skill {}

//If a monster tries to use a Manual Mode Attack on this monster, calculate 1u1. If this value is greater than 1 / Species Speed Factor, the attack has no effect. This monster cannot use a Physical Mode Attack while using this Defense.
