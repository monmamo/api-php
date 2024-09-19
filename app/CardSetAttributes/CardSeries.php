<?php

namespace App\CardSetAttributes;

class CardSeries
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
        public \App\Enums\CardSeries $series,
    ) {}
}
