<?php

namespace App\Contracts;

interface Lazy
{
    /**
     * Resolves the lazy value.
     *
     * @implements \App\Contracts\Lazy::resolve
     * @group nonary
     */
    public function resolve(): Optional;
}
