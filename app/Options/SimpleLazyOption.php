<?php

namespace App\Options;

use App\Contracts\Lazy;
use App\Contracts\Optional;

/**
 * Creates a lazy-option with the given callback.
 *
 * This is also a helper constructor for lazy-consuming existing APIs where the return value is not yet an option. By default, we treat ``null`` as None case, and everything else as Some.
 *
 * @template T
 *
 *
 */
class SimpleLazyOption implements Lazy, Optional
{
    private readonly mixed $_inner_value;

    /**
     * Constructor.
     *
     *
     * @group magic
     * @group mutator
     * @group variadic
     *
     * @return void
     */
    public function __construct(
        protected readonly mixed $callable,
        protected readonly array $arguments_to_callable = [],
        protected readonly mixed $context_to_dump = [],
        protected readonly mixed $enabled = true,
        protected readonly mixed $binding_target = null,
    ) {}

    /**
     * Returns this option if non-empty, or the passed option otherwise.
     *
     *
     * @implements \App\Contracts\Optional::orElse
     * @group passthrough
     * @group unary
     *
     * @uses \App\Contracts\Optional::orElse
     * @uses \App\Options\SimpleLazyOption::resolve
     */
    final public function orElse(Optional $else): Optional
    {
        return $this->resolve()->orElse($else);
    }

    /**
     * Resolves the lazy value.
     *
     *
     * @implements \App\Contracts\Lazy::resolve
     * @group nonary
     *
     * @uses \App\Callables\run
     * @uses \App\Options\wrap
     */
    public function resolve(): Optional
    {
        return $this->_inner_value ??= \App\Callables\run(
            enabled: $this->enabled,
            callable: $this->callable,
            arguments_to_callable: $this->arguments_to_callable,
            context_to_dump: $this->context_to_dump,
            return_as_option: true,
        );
    }
}
