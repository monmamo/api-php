<?php

namespace App\Taxons\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class FeminineMonsterName
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
