<?php

namespace App\GeneralAttributes;

#[\Attribute(\Attribute::TARGET_ALL)]
class Color
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
        public \App\Enums\Color $color,
    ) {}
}