<?php

namespace App\CardAttributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class SvgHeroImage
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
        public string $code,
    ) {}
}
