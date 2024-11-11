<?php

namespace Canon\Taxons\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Rarity
{
    public readonly array $pieces;

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
        ...$pieces,
    ) {
        $this->pieces = $pieces;
    }
}
