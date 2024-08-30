<?php

namespace App\GeneralAttributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Trainable
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
        public readonly int $cost_per_unit = 1,
    ) {}
}
