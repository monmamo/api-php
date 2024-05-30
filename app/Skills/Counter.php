<?php
namespace App\Skills;
/**
 * Resolve this attack after all other direct attacks. This attack does 2dX damage, where X is the total amount of direct damage this monster took on this turn. If multiple monsters attacked this monster, divide X by the number of monsters that attacked it, and attack each of those monster for 2dX.
 */
class Counter implements \App\Contracts\Skill {}
