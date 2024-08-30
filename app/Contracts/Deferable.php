<?php

namespace App\Contracts;

interface Deferable
{
    /**
     * Returns an option that defers execution of the given callable until the option is consumed.
     *
     * Returns a lazy option for valid operations and an instance of ThrowingOption for invalid operations.
     *
     * @implements \App\Contracts\Deferable::defer
     * @group unary
     *
     * @param mixed $callback Callback to execute on the inner value.
     */
    public function defer(mixed $callback): Lazy;

    // PERHAPS LATER
    // public function deferLeft(mixed $callback, array $additional_arguments = []): Optional
    // public function deferRight(mixed $callback, array $additional_arguments = []): Optional
}
