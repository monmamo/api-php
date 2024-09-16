<?php

namespace App\Options;

use App\Contracts\Lazy;

/**
 * Basis for some common functions:
 * function tap(SEED, TRANSFORMS):mixed { BaseCallable::resolve(seed:SEED,transforms:[TRANSFORMS]); return SEED; }
 * function resolve(SEED, TRANSFORMS):mixed { return BaseCallable::resolve(seed:SEED,transforms:[TRANSFORMS]); }.
 *
 * @group variadic
 */
final class ResolutionOption implements Lazy
{
    use ContextualLazyOption;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group variadic
     *
     * @return void
     */
    public function __construct(
        protected readonly mixed $transform,
        protected readonly array $arguments = [],
        protected readonly mixed $context = [],
    ) {}

    /**
     * The generator should never return an option.
     *
     * @implements \App\Options\ContextualLazyOption::argumentsToGenerator
     * @group variadic
     */
    protected function argumentsToGenerator(): \Traversable
    {
        return new \ArrayIterator($this->arguments);
    }

    /**
     * @implements \App\Options\ContextualLazyOption::generator
     * @group variadic
     */
    protected function generator(...$arguments): \Generator
    {
        yield 'transform' => $this->transform;
        yield 'arguments' => $arguments;
        yield 'context' => $this->context;
        return ($this->transform)(...$arguments);
    }

    /**
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \App\Options\ResolutionOption::__construct
     */
    public static function run(
        mixed $transform,
        array $arguments = [],
        mixed $context = [],
    ): void {
        $resolver = new self($transform, $arguments, $context);
        $resolver->option();
    }
}
