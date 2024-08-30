<?php

namespace App\Concerns\Optional;

use App\Casts\Boolean;
use App\Concerns\Deferable;
use App\Contracts\Optional;
use App\Methods\Count\CountIsAlwaysOne;
use App\Methods\OrElse\OrElseReturnsThis;
use App\Options\BackedEnumOption;
use App\Options\NullOption;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Collection;
use PHPUnit\Framework\Constraint\Constraint;

/**
 * Don't use these traits:
 * - \App\Methods\MagicGet\MagicGetNotValid (enums can't use __get)
 */
trait BackedEnumOptionalFunctionality
{
    use CountIsAlwaysOne;
    use Deferable;
    use NoOffsets;
    use NoProperties;
    use OrElseReturnsThis;

    /**
     * Invoker.
     *
     * MUST NEVER RETURN AN INSTANCE OF TransformativeInvoker!
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group variadic
     * @group passthrough
     *
     * @param mixed[] $items Could be transforms, string pieces, &c.
     *
     * @uses \App\Callables\run
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    final public function __invoke(...$items)
    {
        return \App\Callables\run(
            callable: $this,
            arguments_to_callable: $items,
        );
    }

    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     *
     * @uses \App\Concerns\InnerObject::object
     */
    protected function internalArguments(): \Traversable
    {
        yield $this->value;
    }

    /**
     * @implements \App\Contracts\Dumps::dump
     * @group nonary
     * @group fluent
     *
     * @uses \App\Dumping\dump
     */
    public function dump(): static
    {
        \App\Dumping\dump($this);
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
     * @uses \PHPUnit\Framework\Constraint\Constraint::evaluate
     * @uses \App\Options\wrap
     * @uses \App\Options\NullOption::__construct
     */
    final public function filter(Constraint $predicate): Optional
    {
        return $predicate->evaluate($this->value, '', true) ? \App\Options\wrap($this) : new NullOption();
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns false, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filterNot
     * @group unary
     *
     * @uses \PHPUnit\Framework\Constraint\Constraint::evaluate
     * @uses \App\Options\NullOption::__construct
     * @uses \App\Options\wrap
     */
    final public function filterNot(Constraint $predicate): Optional
    {
        return $predicate->evaluate($this->value, '', true) ? new NullOption() : \App\Options\wrap($this);
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     *
     * @implements \App\Contracts\Mappable::flatMap
     * @group unary
     * @group passthrough
     *
     * @uses \App\Callables\transform
     */
    final public function flatMap($callable): Optional
    {
        return \App\Callables\transform(arity: 1, transforms: $callable, seed: $this->value);
    }

    /**
     * Binary operator for the initial value and the option's value.
     *
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     * @group passthrough
     *
     * @uses \App\Options\foldLeft
     */
    final public function foldLeft($initialValue, $callable)
    {
        return \App\Options\foldLeft($callable, $initialValue, $this->value);
    }

    /**
     * Binary operator for the initial value and the option's value.
     *
     * @implements \App\Contracts\Foldable::foldRight
     * @group binary
     * @group passthrough
     *
     * @uses \App\Options\foldRight
     */
    final public function foldRight($initialValue, $callable)
    {
        return \App\Options\foldRight($callable, $initialValue, $this->value);
    }

    /**
     * Returns the value if available, or throws an exception otherwise.
     *
     * @implements \App\Contracts\HasValue::get
     * @group nonary
     * @group passthrough
     *
     * @throws \RuntimeException If value is not available.
     */
    final public function get()
    {
        return $this->value;
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
    final public function getIterator(): \Traversable
    {
        yield $this->value;
    }

    /**
     * Returns whether this collection or container is empty.
     *
     * Could also return true if no value is available, false otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isEmpty and  \PhpOption\Option::isEmpty are not type-declared.
     *
     * @implements \App\Contracts\Emptyable::isEmpty
     * @implements \Illuminate\Support\Optional::isEmpty
     * @implements \App\Contracts\Emptyable::isEmpty
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    final public function isEmpty()
    {
        return false;
    }

    /**
     * Returns whether this collection or container is not empty.
     *
     * Could also return false if no value is available, true otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isNotEmpty and  \PhpOption\Option::isNotEmpty are not type-declared.
     *
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @implements \Illuminate\Support\Optional::isNotEmpty
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    final public function isNotEmpty()
    {
        return true;
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in Some().
     *
     * @implements \App\Contracts\Mappable::map
     * @group unary
     * @group passthrough
     *
     * @uses \App\Options\wrap
     */
    final public function map($callable): Optional
    {
        return \App\Options\wrap($this->flatMap($callable));
    }

    /**
     * Lets all values through except the passed value.
     *
     * @implements \App\Contracts\Filterable::reject
     * @group unary
     * @group passthrough
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \App\Strings\expectationMessage
     * @uses \App\Options\wrap
     * @uses \App\Options\BackedEnumOption::areEqual
     * @uses \App\Options\NullOption::__construct
     *
     * @throws \AssertionError
     */
    final public function reject(mixed $value): Optional
    {
        \assert(
            $this instanceof \BackedEnum,
            \App\Strings\expectationMessage(
                expectation: \BackedEnum::class,
                value: $this,
            ),
        );

        return BackedEnumOption::areEqual(
            standard: $this,
            candidate: $value,
            invert: true,
        ) ? \App\Options\wrap($this) : new NullOption();
    }

    /**
     * Lets through only the passed value.
     *
     * @implements \App\Contracts\Filterable::select
     * @group unary
     * @group passthrough
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \App\Strings\expectationMessage
     * @uses \App\Options\wrap
     * @uses \App\Options\BackedEnumOption::areEqual
     * @uses \App\Options\NullOption::__construct
     *
     * @throws \AssertionError
     */
    final public function select(mixed $value): Optional
    {
        \assert(
            $this instanceof \BackedEnum,
            \App\Strings\expectationMessage(
                expectation: \BackedEnum::class,
                value: $this,
            ),
        );

        return BackedEnumOption::areEqual(
            standard: $this,
            candidate: $value,
        ) ? \App\Options\wrap($this) : new NullOption();
    }
}
