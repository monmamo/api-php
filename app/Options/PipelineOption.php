<?php

namespace App\Options;

use App\Contracts\HasContext;
use App\Contracts\Optional;

class PipelineOption implements HasContext, Optional
{
    use ContextualLazyOption;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group trinary
     *
     * @uses \App\Options\ContextualLazyOption::__construct
     *
     * @return void
     */
    public function __construct(
        protected readonly mixed $seed = null,
        protected readonly array $transforms,
        protected readonly mixed $context = null,
    ) {}

    /**
     * The generator should never return an option.
     *
     * @implements \App\Options\ContextualLazyOption::argumentsToGenerator
     * @group variadic
     */
    protected function argumentsToGenerator(): \Traversable
    {
        yield $this->seed;
    }

    /**
     * @implements \App\Options\ContextualLazyOption::generator
     * @group variadic
     *
     * @uses \array_reduce (native) Iteratively reduces the array to a single value using a callback function.
     */
    protected function generator(...$arguments): \Generator
    {
        yield 'transforms' => $this->transforms;
        yield 'seed' => $arguments[0];
        yield 'context' => $this->context;

        return \array_reduce(
            $this->transforms,
            fn ($carry, callable $transform) => $transform($carry),
            $arguments[0],
        );
    }

    /**
     * @group sugar Consider implementing literally instead of using this method.
     * @group variadic
     *
     * @uses \App\Options\PipelineOption::__construct
     */
    public static function run(
        mixed $seed,
        array $transforms,
        mixed $context = null,
    ): void {
        $resolver = new static($seed, $transforms, $context);
        $resolver->option();
    }
}
