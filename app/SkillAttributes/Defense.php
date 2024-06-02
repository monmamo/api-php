<?php

namespace App\SkillAttributes;

#[\Attribute(\Attribute::TARGET_ALL)]
class Defense
{
    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(
    ) {
    }
}
