<?php

namespace App\Skills;

use App\Contracts\Skill;

class Bite implements Skill {}

//tags:: [[Attack]] #[[Physical Mode]]
//requirements:: [[Biting]]

//Damage to one monster = $$H((Strength÷5)(Biting÷20)exp(Cruelty÷200))$$
