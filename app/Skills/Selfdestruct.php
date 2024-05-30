<?php
namespace App\Skills;
class Selfdestruct implements \App\Contracts\Skill {}


//Requires: [[Combustible]], [[Expanding]]
//
//This monster faints.
//$$X = \dfrac{(Health Remaining)(Combustible)(Expanding)}{1000}$$
//All other monsters in play take 1uX [[Damage]].
