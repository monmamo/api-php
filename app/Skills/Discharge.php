<?php

namespace App\Skills;

use App\Contracts\Skill;
use App\GeneralAttributes\Trainable;

//Offensive.
//source or inspiration:: Lightning Cube 01 PTCG card https://bulbapedia.bulbagarden.net/wiki/Lightning_Cube_01_(Aquapolis_127)

// Discard all [[Electricity]] cards attached to this Monster. For each card, roll 1d6. The total rolled is the amount of Damage done to the Defending Monster.

#[Trainable]
class Discharge implements Skill {}
