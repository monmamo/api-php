<?php

namespace App\Options;

use App\Casts\Boolean;
use App\Concerns\AlwaysGettable;
use App\Concerns\Deferable;
use App\Contracts\Equality;
use App\Contracts\Filterable;
use App\Contracts\Foldable;
use App\Contracts\HasValue;
use App\Contracts\Mappable;
use App\Contracts\Optional;
use App\Contracts\Throws;
use App\Facades\ArrayAccess;
use App\States\Immutable;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Collection;
use Illuminate\Support\Traits\ForwardsCalls;
use PHPUnit\Framework\Constraint\Constraint;

/**
 * Don't declare an option property here.
 *
 * Don't define these methods here:
 * - public function count(): int { return \count($this->option()); }
 *
 * If using this option then do not use these traits:
 * - \App\Concerns\AlwaysDefined
 * - \App\Concerns\NeverEmpty
 * - \App\Concerns\AlwaysEmpty
 * - \App\Concerns\AlwaysScalar
 * - \App\Concerns\AlwaysSingleValue
 * - \App\Concerns\Optional\NoOffsets
 * - \App\Concerns\Optional\NoProperties
 * - \App\Methods\MagicGet\MagicGetNotValid
 *
 *
 */
trait InnerOption
{
    use AlwaysGettable;
    use Deferable;
    use ForwardsCalls;
    use Immutable;

    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.
     * Dynamically passes a method to the underlying object.
     *
     * Do not declare final.
     *
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param mixed[] $parameters Enumerated array containing the parameters passed to the method.
     *
     * @uses \Illuminate\Support\Traits\ForwardsCalls::forwardCallTo
     *
     * @throws \BadMethodCallException
     * @throws \Throwable if the option is not accessible or from the method call
     */
    public function __call($name, $parameters)
    {
        return $this->forwardCallTo($this->option(), $name, $parameters);
    }

    /**
     * Invoker.
     *
     * MUST NEVER RETURN AN INSTANCE OF TransformativeInvoker!
     *
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group passthrough
     * @group variadic
     *
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \App\Callables\run
     * @uses \App\Options\InnerOption::get
     *
     * @throws \AssertionError
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     * @throws \LogicException If value is not available.
     */
    final public function __invoke(...$transforms)
    {
        return \App\Callables\run(
            callable: $transforms,
            arguments_to_callable: \iterator_to_array($this->internalArguments()),
            context_to_dump: \compact('this'),
        );
    }

    /**
     * Because this is a lazy option, we may have an inner option that is not a string.
     *
     * Returns a representation of this object as a string.
     *
     *
     * @group nonary
     * @group resolving
     * @group magic-tostring-signature
     * @group magic
     *
     * @uses \App\Options\InnerOption::option
     * @uses \App\Strings\unwrap
     */
    public function __toString(): string
    {
        return \App\Strings\unwrap($this->option());
    }

    /**
     *
     * @group unary
     * @group sugar
     *
     * @uses \tap
     * @uses \App\Options\InnerOption::option
     * @uses \App\Contracts\Throws::throwThrowable
     */
    private function _tap(\Closure $callable): void
    {
        $option = $this->option();

        if ($option instanceof Throws) {
            $option->throwThrowable();
        }

        \tap($this->option(), $callable);
    }

    /**
     *
     * @group unary
     * @group sugar
     *
     * @uses \App\Options\InnerOption::option
     */
    private function _transform(\Closure $callable): mixed
    {
        return \transform($this->option(), $callable);
    }

    /**
     *
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     *
     * @uses \App\Options\iterate
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \App\Options\InnerOption::option
     * @uses \App\Contracts\Throws::throwThrowable
     */
    protected function internalArguments(): \Traversable
    {
        $option = $this->option();

        if ($option instanceof \Traversable) {
            return $option;
        }

        if ($option instanceof HasValue) {
            return \App\Options\iterate($option->get());
        }

        if ($option instanceof Throws) {
            $option->throwThrowable();
        }
    }

    /**
     * Returns the inner option.
     *
     *
     * @implements \App\Options\InnerOption::option
     * @group nonary
     * @group resolving
     */
    abstract protected function option(): Optional;

    /**
     * Returns whether a candidate value is "equal" to this value.
     *
     * This method allows objects to be used as keys in structures such as Ds\Map and Ds\Set, or any other lookup structure that honors this interface.
     *
     * @see https://www.php.net/manual/en/ds-hashable.equals.php
     *
     *
     * @implements \App\Interfaces\Contracts\Equality::equals
     * @implements \Ds\Hashable::equals
     * @group comparative
     * @group reductive
     *
     * @param mixed $value The value to compare to this object.
     *
     * @uses \App\Options\InnerOption::option
     * @uses \App\Constraints\Equals::__construct
     * @uses \App\Constraints\Equals::evaluate
     *
     * @return boolean
     */
    public function equals(mixed $value): bool
    {
        $option = $this->option();

        return match (true) {
            $option instanceof Equality => $option->equals($value),
            default => false
        };
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns true, the option itself is returned; otherwise, None is returned.
     *
     *
     * @implements \App\Contracts\Filterable::filter
     * @group passthrough
     * @group unary
     *
     * @uses \App\Contracts\Optional::filter
     * @uses \App\Options\InnerOption::_transform
     */
    final public function filter(Constraint $predicate): Optional
    {
        return $this->_transform(
            fn (Filterable $inner_value) => $inner_value->filter($predicate),
        );
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns false, the option itself is returned; otherwise, None is returned.
     *
     *
     * @implements \App\Contracts\Filterable::filterNot
     * @group passthrough
     * @group unary
     *
     * @uses \App\Contracts\Optional::filterNot
     * @uses \App\Options\InnerOption::option
     */
    final public function filterNot(Constraint $predicate): Optional
    {
        return $this->_transform(
            fn (Filterable $inner_value) => $inner_value->filterNot($predicate),
        );
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     *
     * WARNING Doesn't do the assertion (instance of \App\Contracts\Optional) for the return value of the callable.
     *
     *
     * @implements \App\Contracts\Mappable::flatMap
     * @group passthrough
     * @group unary
     *
     * @uses \App\Contracts\Mappable::flatMap
     * @uses \App\Options\InnerOption::_transform
     */
    final public function flatMap($callable): mixed
    {
        return $this->_transform(
            fn (Mappable $inner_value) => $inner_value->flatMap($callable),
        );
    }

    /**
     * Binary operator for the initial value and the option's value.
     *
     *
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     * @group passthrough
     *
     * @uses \App\Options\InnerOption::_transform
     *
     * @throws \LogicException
     */
    final public function foldLeft($initialValue, $callable)
    {
        return $this->_transform(
            /**
             * @uses \LogicException::__construct
             * @uses \App\Contracts\Foldable::foldLeft
             * @uses \App\Contracts\Throws::throwThrowable
             *
             * @throws \LogicException
             */
            function ($inner_option) use ($initialValue, $callable): mixed {
                if ($inner_option instanceof Foldable) {
                    return $inner_option->foldLeft($initialValue, $callable);
                }

                if ($inner_option instanceof Throws) {
                    $inner_option->throwThrowable();
                }

                throw new \LogicException();
            },
        );
    }

    /**
     * Binary operator for the initial value and the option's value.
     *
     *
     * @implements \App\Contracts\Foldable::foldRight
     * @group binary
     * @group passthrough
     *
     * @uses \App\Options\InnerOption::_transform
     *
     * @throws \LogicException
     */
    final public function foldRight($initialValue, $callable)
    {
        return $this->_transform(
            /**
             * @uses \LogicException::__construct
             * @uses \App\Contracts\Foldable::foldRight
             * @uses \App\Contracts\Throws::throwThrowable
             *
             * @throws \LogicException
             */
            function ($inner_option) use ($initialValue, $callable): mixed {
                if ($inner_option instanceof Foldable) {
                    return $inner_option->foldRight($initialValue, $callable);
                }

                if ($inner_option instanceof Throws) {
                    $inner_option->throwThrowable();
                }

                throw new \LogicException();
            },
        );
    }

    /**
     * Returns the value if available, or throws an exception otherwise.
     *
     *
     * @implements \App\Contracts\HasValue::get
     * @group nonary
     * @group passthrough
     *
     * @uses \App\Contracts\HasValue::get
     * @uses \App\Options\InnerOption::option
     *
     * @throws \LogicException If value is not available.
     */
    final public function get()
    {
        return \App\Options\get($this->option());
    }

    /**
     * Returns an iterator (either as an explicit implementation of \Traversable or an implicit implementation of \Generator with yield statements) that iterates through the component items of this object.
     *
     *
     * @implements \IteratorAggregate::getIterator
     * @group accessor
     * @group multivalue
     * @group nonary
     * @group passthrough
     *
     * @uses \App\Contracts\Throws::throwThrowable
     * @uses \App\Options\InnerOption::option
     * @uses \LogicException::__construct
     *
     * @throws \LogicException
     */
    final public function getIterator(): \Traversable
    {
        $option = $this->option();

        if ($option  instanceof \Traversable) {
            return $option;
        }

        if ($option instanceof Throws) {
            $option->throwThrowable();
        }

        throw new \LogicException('inner option is not iterable');
    }

    /**
     * Conditionally transforms a value.
     *
     *
     * @group nonary
     *
     * @uses \App\Callables\run
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \LogicException::__construct
     * @uses \is_bool
     *
     * @throws \AssertionError
     */
    final public function if(): \Closure
    {
        $flag = $this->get(); // throws

        \assert(\is_bool($flag), 'option must be a boolean value');

        return $flag
            ? function (mixed $callable, ...$arguments): void {}
        : function (mixed $callable, ...$arguments) {
            return \App\Callables\run($callable, $arguments);
        };

        // throw new \LogicException('inner option is not a value');
    }

    /**
     * Returns whether this collection or container is empty.
     *
     * Could also return true if no value is available, false otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isEmpty and  \PhpOption\Option::isEmpty are not type-declared.
     *
     *
     * @implements \App\Contracts\Emptyable::isEmpty
     * @implements \Illuminate\Support\Optional::isEmpty
     * @implements \App\Contracts\Emptyable::isEmpty
     * @group nonary
     * @group reductive
     *
     * @uses \App\Options\isEmpty
     *
     * @return boolean
     */
    final public function isEmpty()
    {
        return \App\Options\isEmpty($this->option());
    }

    /**
     * Returns whether this collection or container is not empty.
     *
     * Could also return false if no value is available, true otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isNotEmpty and  \PhpOption\Option::isNotEmpty are not type-declared.
     *
     *
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @implements \Illuminate\Support\Optional::isNotEmpty
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @group nonary
     * @group reductive
     *
     * @uses \App\Contracts\Emptyable::isNotEmpty
     *
     * @return boolean
     */
    final public function isNotEmpty()
    {
        return \App\Options\isNotEmpty($this->option());
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in Some().
     *
     *
     * @implements \App\Contracts\Mappable::map
     * @group passthrough
     * @group unary
     *
     * @uses \App\Contracts\Mappable::map
     * @uses \App\Options\InnerOption::_transform
     */
    final public function map($callable): Optional
    {
        return $this->_transform(
            fn (Mappable $inner_value) => $inner_value->map($callable),
        );
    }

    /**
     * Returns a boolean indicating whether an offset exists or or represents a retrievable value in this collection.
     *
     * @implements \ArrayAccess::offsetExists
     * @group reductive
     * @group unary
     * @group accessor-by-key
     *
     * @param mixed $offset Offset to check.
     *
     * @return boolean True if the offset exists in this collection; false if it doesn't.
     */
    public function offsetExists(mixed $offset): bool
    {
        return ArrayAccess::offsetExists($this->option(), $offset);
    }

    /**
     * Returns the value at the offset, or throws an appropriate exception.
     *
     * @implements \ArrayAccess::offsetGet
     * @group unary
     * @group resolving
     * @group selective
     * @group accessor
     * @group accessor-by-key
     *
     * @param mixed $offset Offset to retrieve.
     */
    public function offsetGet(mixed $offset): mixed
    {
        return ArrayAccess::offsetGet($this->option(), $offset);
    }

    /**
     * Returns this option if non-empty, or the passed option otherwise.
     *
     *
     * @implements \App\Contracts\Optional::orElse
     * @group passthrough
     * @group unary
     *
     * @uses \App\Contracts\Optional::orElse
     * @uses \App\Options\InnerOption::option
     */
    final public function orElse(Optional $else): Optional
    {
        return $this->option()->orElse($else);
    }

    /**
     * Returns an option for a specific property value represented or produced by the option.
     *
     *
     * @implements \App\Contracts\HasProperties::property
     * @group unary
     *
     * @uses \App\Contracts\HasProperties::property
     * @uses \App\Options\InnerOption::option
     */
    final public function property(mixed $property): mixed
    {
        return \App\Options\property($this->option(), $property);
    }

    /**
     * Lets all values through except the passed value.
     *
     *
     * @implements \App\Contracts\Filterable::reject
     * @group passthrough
     * @group unary
     *
     * @uses \App\Contracts\Filterable::reject
     * @uses \App\Options\InnerOption::option
     */
    final public function reject(mixed $value): Optional
    {
        return \App\Options\reject($this->option(), $value);
    }

    /**
     * Lets through only the passed value.
     *
     *
     * @implements \App\Contracts\Filterable::select
     * @group passthrough
     * @group unary
     *
     * @uses \App\Contracts\Filterable::select
     * @uses \App\Options\InnerOption::option
     */
    final public function select(mixed $value): Optional
    {
        return \App\Options\select($this->option(), $value);
    }

    /**
     *
     * @group variadic
     *
     * @uses \App\Callables\transform
     * @uses \App\Options\InnerOption::option
     *
     * @throws \AssertionError
     * @throws \LogicException If value is not available.
     */
    final public function tap(...$callables): void
    {
        \App\Callables\transform(1, $callables, $this->get());
    }

    /**
     * Conditionally transforms a value.
     *
     *
     * @group nonary
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \LogicException::__construct
     * @uses \is_bool
     * @uses \App\Contracts\Throws::throwThrowable
     *
     * @throws \AssertionError
     * @throws \LogicException
     */
    final public function unless(): \Closure
    {
        $flag = $this->get(); // throws

        \assert(\is_bool($flag), 'option must be a boolean value');

        return $flag
            ? function (mixed $callable, ...$arguments) {
                return \App\Callables\run($callable, $arguments);
            }
        : function (mixed $callable, ...$arguments): void {};
    }
}
