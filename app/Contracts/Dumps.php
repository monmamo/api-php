<?php

namespace App\Contracts;

interface Dumps
{
    /**
     * @implements \App\Contracts\Dumps::dump
     * @group nonary
     * @group fluent
     */
    public function dump(): static;
}
