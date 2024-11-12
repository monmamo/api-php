<?php

namespace Canon\Taxons\Attributes;

use Canon\Taxons\Enums\TaxonType;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Type
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
        public readonly TaxonType $type,
    ) {}
}
