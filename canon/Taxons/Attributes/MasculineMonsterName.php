<?php

namespace Canon\Taxons\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class MasculineMonsterName
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
        public readonly string $name,
    ) {}
}
