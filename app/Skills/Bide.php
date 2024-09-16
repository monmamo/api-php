<?php

namespace App\Skills;

use App\Contracts\Skill;

class Bide implements Skill {}

//Trainer commands the monster to "Bide" for any number of turns. When the Trainer gives the command for the monster to attack, The monster attacks for double (before applying any multipliers) the damage it received while biding.
