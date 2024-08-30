<?php

namespace App\Contracts;

interface Selector
{
    /**
     * To make invoker, refer with `VALUE->invoke(...)`.
     *
     * @implements \App\Contracts\Selector::invoke
     * @group variadic
     */
    public function invoke(mixed $callable, ...$additional_arguments);
}
