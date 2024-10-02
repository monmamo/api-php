<?php

namespace App\GeneralAttributes;

class VariadicAttribute
{
    public readonly array $values;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(...$values)
    {
        $this->values = $values;
    }
}
