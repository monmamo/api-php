<?php

namespace App\Skills;

use App\Contracts\Skill;

class Selfdestruct implements Skill {}

//Requires: [[Combustible]], [[Expanding]]

//This monster faints.
//$$X = \dfrac{(Health Remaining)(Combustible)(Expanding)}{1000}$$
//All other monsters on the Battlefield take 1uX [[Damage]].
