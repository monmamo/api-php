<?php

namespace App\Options;

use App\Concerns\AlwaysGettable;
use App\Concerns\AlwaysScalar;
use App\Concerns\AlwaysSingleValue;
use App\Concerns\Deferable;
use App\Concerns\NeverEmpty;
use App\Concerns\Optional\SelectThroughFilter;
use App\Contracts\Dumps;
use App\Contracts\Emptyable;
use App\Contracts\Filterable;
use App\Contracts\Foldable;
use App\Contracts\HasValue;
use App\Contracts\Mappable;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Contracts\TransformativeInvoker;
use App\Methods\MagicInvoke\InvokeDoesNothing;
use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Database\Grammar;
use PHPUnit\Framework\Constraint\Constraint;

final class FalseOption implements Dumps, Emptyable, Expression, Filterable, Foldable, HasValue, Mappable, Normalizable, Optional, TransformativeInvoker
{
    use AlwaysGettable;
    use AlwaysScalar;
    use Deferable;    // uses AlwaysDefined, AlwaysSingleValue, CountIsAlwaysOne
    use InvokeDoesNothing;
    use NeverEmpty;
    use SelectThroughFilter;

    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     */
    protected function internalArguments(): \Traversable
    {
        yield false;
    }

    /**
     * @implements \App\Contracts\Dumps::dump
     * @group fluent
     * @group nonary
     *
     * @uses \App\Dumping\dump
     */
    public function dump(): static
    {
        \App\Dumping\dump(false); // 🔒
        return $this;
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns true, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filter
     * @group unary
     *
     * @uses \App\Callables\filter
     */
    public function filter(Constraint $predicate): Optional
    {
        return \App\Callables\filter($predicate, $this, false);
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns false, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filterNot
     * @group unary
     *
     * @uses \App\Callables\filterNot
     */
    public function filterNot(Constraint $predicate): Optional
    {
        return \App\Callables\filterNot($predicate, $this, false);
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     *
     * @implements \App\Contracts\Mappable::flatMap
     *
     * @template S
     *
     * @uses \App\Callables\transform
     */
    public function flatMap($callable): Optional
    {
        return \App\Callables\transform(arity: 1, transforms: $callable, seed: false);
    }

    /**
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     *
     * @uses \App\Options\foldLeft
     */
    public function foldLeft($initial_value, $callable)
    {
        return \App\Options\foldLeft($callable, $initial_value, false);
    }

    /**
     * @implements \App\Contracts\Foldable::foldRight
     * @group binary
     *
     * @uses \App\Options\foldRight
     */
    public function foldRight($initial_value, $callable)
    {
        return \App\Options\foldRight($callable, $initial_value, false);
    }

    /**
     * Returns the value if available, or throws an exception otherwise.
     *
     * @implements \App\Contracts\HasValue::get
     * @group nonary
     *
     * @throws \RuntimeException If value is not available.
     */
    public function get()
    {
        return false;
    }

    /**
     * Returns an iterator (either as an explicit implementation of \Traversable or an implicit implementation of \Generator with yield statements) that iterates through the component items of this object.
     *
     * @implements \IteratorAggregate::getIterator
     * @group accessor
     * @group multivalue
     * @group nonary
     * @group passthrough
     */
    public function getIterator(): \Traversable
    {
        yield false;
    }

    /**
     * Returns the value of the expression.
     *
     * @implements \Illuminate\Contracts\Database\Query\Expression::getValue
     * @group unary
     *
     * @return float|int|string
     */
    public function getValue(Grammar $grammar)
    {
        return 0;
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in Some().
     *
     * @implements \App\Contracts\Mappable::map
     * @group unary
     *
     * @template S
     *
     * @param callable(T):S $callable
     *
     * @uses \App\Options\FalseOption::flatMap
     * @uses \App\Options\wrap
     */
    public function map($callable): Optional
    {
        return \App\Options\wrap($this->flatMap($callable));
    }

    /**
     * Returns the "normal" value of the object, as defined by \App\Casts\NormalScalar.
     *
     * @implements \App\Contracts\Normalizable::normalized
     * @group nonary
     */
    public function normalized(): string|int|float|bool|null|\DateTimeInterface
    {
        return false;
    }
}
