<?php

namespace App\Methods\Defer;

use App\Contracts\Lazy;
use App\Contracts\Optional;
use App\Options\ThrowingOption;

/**
 * usage:
 * use \App\Methods\Defer\DeferThrows;
 */
trait DeferThrows
{
    /**
     * Returns an option that defers execution of the given callable until the option is consumed.
     *
     * @implements \App\Contracts\Deferable::defer
     * @group unary
     *
     * @param mixed $callback Callback to execute on the inner value.
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \ValueError::__construct
     * @uses \App\Options\ThrowingOption::__construct
     */
    final public function defer(mixed $callback): Lazy
    {
        return new ThrowingOption(
            throwable: new \ValueError(\__('no-value')),
            context_to_dump: \compact('this'),
        );
    }

    /**
     * Returns an option that defers execution of the given callable until the option is consumed.
     *
     * @group unary
     *
     * @param mixed $callback Callback to execute on the inner value.
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \ValueError::__construct
     * @uses \App\Options\ThrowingOption::__construct
     */
    final public function deferLeft(mixed $callback, array $additional_arguments = []): Optional
    {
        return new ThrowingOption(
            throwable: new \ValueError(\__('no-value')),
            context_to_dump: \compact('this'),
        );
    }

    /**
     * Returns an option that defers execution of the given callable until the option is consumed.
     *
     * @group unary
     *
     * @param mixed $callback Callback to execute on the inner value.
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \ValueError::__construct
     * @uses \App\Options\ThrowingOption::__construct
     */
    final public function deferRight(mixed $callback, array $additional_arguments = []): Optional
    {
        return new ThrowingOption(
            throwable: new \ValueError(\__('no-value')),
            context_to_dump: \compact('this'),
        );
    }
}
