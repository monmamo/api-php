<?php

namespace App\Concerns;

use App\Contracts\Lazy;
use App\Options\SimpleLazyOption;

/**
 * Basic implementation of the Deferable interface.
 */
trait Deferable
{
    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     */
    abstract protected function internalArguments(): \Traversable;

    /**
     * Returns an option that defers execution of the given callable until the option is consumed.
     *
     * @implements \App\Contracts\Deferable::defer
     * @group unary
     *
     * @param mixed $callback Callback to execute on the inner value.
     *
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \App\Concerns\Deferable::internalArguments
     * @uses \App\Options\SimpleLazyOption::__construct
     */
    public function defer(mixed $callback): Lazy
    {
        return new SimpleLazyOption(
            callable: $callback,
            arguments_to_callable: \iterator_to_array($this->internalArguments()),
        );
    }

    /**
     * Returns an option that defers execution of the given callable until the option is consumed.
     *
     * @group unary
     *
     * @param mixed $callback Callback to execute on the inner value.
     *
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \App\Concerns\Deferable::internalArguments
     * @uses \App\Options\createLeftLazy
     */
    public function deferLeft(mixed $callback, array $additional_arguments = []): Lazy
    {
        return \App\Options\createLeftLazy(
            callable: $callback,
            internal_arguments: \iterator_to_array($this->internalArguments()),
            external_arguments: $additional_arguments,
        );
    }

    /**
     * Returns an option that defers execution of the given callable until the option is consumed.
     *
     * @group unary
     *
     * @param mixed $callback Callback to execute on the inner value.
     *
     * @uses \App\Concerns\Deferable::internalArguments
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \App\Options\createRightLazy
     */
    public function deferRight(mixed $callback, array $additional_arguments = []): Lazy
    {
        return \App\Options\createRightLazy(
            callable: $callback,
            internal_arguments: \iterator_to_array($this->internalArguments()),
            external_arguments: $additional_arguments,
        );
    }
}
