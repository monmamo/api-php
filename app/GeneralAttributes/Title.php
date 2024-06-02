<?php

namespace App\GeneralAttributes;

#[\Attribute(\Attribute::TARGET_ALL)]
class Title
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
        public string $title,
    ) {
    }
}
