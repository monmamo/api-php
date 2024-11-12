<?php

namespace Canon\Taxons\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Parents
{
    public readonly array $taxons;

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
        ...$taxons,
    ) {
        $this->taxons = $taxons;
    }
}
