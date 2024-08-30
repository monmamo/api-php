<?php

namespace App\Options;

use App\Concerns\AlwaysUndefined;
use App\Contracts\Lazy;
use App\Contracts\Optional;
use App\Methods\Equals\EqualsNothing;

/**
 * DO NOT USe these traits:
 * - \App\Concerns\AlwaysUndefined
 * - \App\Concerns\AlwaysEmpty
 *
 *
 */
final class ThrowingOption implements Lazy, Optional
{
    use AlwaysUndefined;
    use EqualsNothing;

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
        protected readonly \Throwable $throwable,
        protected readonly mixed $context_to_dump = [],
    ) {}

    /**
     * Invoker.
     *
     * MUST NEVER RETURN AN INSTANCE OF TransformativeInvoker!
     *
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group variadic
     *
     * @param mixed[] $items Could be transforms, string pieces, &c.
     */
    public function __invoke(...$items): void
    {
        $this->resolve();
    }

    /**
     *
     */
    public static function create(\Throwable $throwable, mixed $context_to_dump = []): self
    {
        return new self($throwable, $context_to_dump);
    }

    /**
     *
     * @implements \App\Contracts\Dumps::dump
     * @group fluent
     * @group nonary
     *
     * @uses \App\Dumping\dump
     */
    public function dump(): static
    {
        \App\Dumping\dump($this->throwable, $this->context_to_dump); // 🔒
        return $this;
    }

    /**
     *
     *
     * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
     * @uses \sprintf (native) Returns a formatted string.
     * @uses \ValueError::__construct
     */
    public static function forMissingOffset(mixed $source, mixed $offset): self
    {
        return new self(
            new \ValueError(\sprintf('cannot access offset %s on %s', $offset, \get_debug_type($source))),
            \compact('source', 'offset'),
        );
    }

    /**
     * Resolves the lazy value.
     *
     *
     * @implements \App\Contracts\Lazy::resolve
     * @group nonary
     */
    public function resolve(): Optional
    {
        \App\Dumping\dumpLabeled($this->context_to_dump);
        throw $this->throwable;
    }
}
