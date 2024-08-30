<?php

namespace App\Concerns;

use App\Concerns\Optional\SelectThroughFilter;
use App\Constraints\Equals;
use App\Contracts\HasBooleanCast;
use App\Contracts\HasFloatCast;
use App\Contracts\HasIntegerCast;
use App\Contracts\Optional;
use Illuminate\Support\Collection;
use Illuminate\Support\Traits\ForwardsCalls;
use PHPUnit\Framework\Constraint\Constraint;

/**
 * Do not inmplement these methods:
 * - __toString
 */
trait InnerObject
{
    use AlwaysDefined;
    use AlwaysGettable;
    use Deferable;
    use ForwardsCalls;
    use SelectThroughFilter;

    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $name Name of the method being called.
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \Illuminate\Support\Traits\ForwardsCalls::forwardCallTo
     * @uses \App\Concerns\InnerObject::object
     */
    public function __call(string $name, array $arguments)
    {
        return $this->forwardCallTo($this->object(), $name, $arguments);
    }

    /**
     * @group magic
     * @group accessor
     * @group unary
     * @group accessor-by-key
     * @group selective
     * @group passthrough
     *
     * @uses \App\Concerns\InnerObject::object
     *
     * @throws \AssertionError
     */
    final public function __get(mixed $name)
    {
        return $this->object()->__get($name);
    }

    /**
     * Invoker.
     *
     * Retrieves the inner value or pipes it through any number of transforms.
     *
     * 💡 This makes this object callable, eliminating the need for a tap method.
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group nonary
     *
     * @param mixed[] $transforms The transforms to apply to the inner value.
     *
     * @uses \App\Callables\transform
     * @uses \App\Concerns\InnerObject::object
     */
    final public function __invoke(...$transforms)
    {
        return \App\Callables\transform(arity: 1, transforms: $transforms, seed: $this->object());
    }

    /**
     * Triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.
     * Dynamically check a property exists on the underlying object.
     *
     * @group accessor
     * @group accessor-by-key
     * @group magic
     * @group unary
     * @group passthrough
     *
     * @param mixed $name Name of the property being called.
     *
     * @uses \App\Concerns\InnerObject::object
     *
     * @return bool
     */
    final public function __isset(mixed $name)
    {
        return $this->object()->__isset($name);
    }

    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     *
     * @uses \App\Concerns\InnerObject::object
     */
    protected function internalArguments(): \Traversable
    {
        yield $this->object();
    }

    /**
     * @implements \App\Concerns\InnerObject::object
     * @group nonary
     * @group resolving
     */
    abstract protected function object(): object;

    /**
     * Runs the given Closure bound to this item then returns the result.
     *
     * @group accessor
     * @group unary
     * @group fluent
     *
     * @param null|callable $predicate_callable Callback to execute on the inner value.
     *
     * @uses \App\Dumping\dump
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Closure::bindTo
     * @uses \App\Callables\makeClosure
     * @uses \App\Concerns\InnerObject::object
     * @uses \LogicException::__construct
     *
     * @throws \AssertionError
     * @throws \LogicException
     */
    final public function assert(mixed $predicate_callable): static
    {
        try {
            $closure = \App\Callables\makeClosure($predicate_callable);
            \assert($closure->bindTo($this->object()));
            return $this;
        } catch (\AssertionError $exception) {
            \App\Dumping\dump($this); // 🔒
            throw new \LogicException('assertion against proxy failed');
        } catch (\Throwable $exception) {
            \App\Dumping\dump($this); // 🔒
            throw $exception;
        }
    }

    /**
     * Returns a representation of this object as a string.
     *
     * @implements \App\Interfaces\Contracts\Stringable::asString
     * @group nonary
     * @group accessor
     * @group reductive
     *
     * @uses \App\Concerns\InnerObject::object
     */
    final public function asString(): string
    {
        return (string) $this->object();
    }

    /**
     * Returns whether a candidate value is "equal" to this value.
     *
     * This method allows objects to be used as keys in structures such as Ds\Map and Ds\Set, or any other lookup structure that honors this interface.
     *
     * @see https://www.php.net/manual/en/ds-hashable.equals.php
     *
     * @implements \App\Interfaces\Contracts\Equality::equals
     * @implements \Ds\Hashable::equals
     * @group comparative
     * @group reductive
     *
     * @param mixed $value The value to compare to this object.
     *
     * @uses \App\Constraints\Equals::__construct
     * @uses \App\Constraints\Equals::evaluate
     * @uses \App\Concerns\InnerObject::object
     *
     * @return boolean
     */
    final public function equals(mixed $value): bool
    {
        return \app(Equals::class)->evaluate($this->object(), '', true);
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
     * @uses \App\Concerns\InnerObject::object
     */
    final public function filter(Constraint $predicate): Optional
    {
        return \App\Callables\filter($predicate, $this, $this->object());
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
     * @uses \App\Concerns\InnerObject::object
     */
    final public function filterNot(Constraint $predicate): Optional
    {
        return \App\Callables\filterNot($predicate, $this, $this->object());
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     *
     * In contrast to ``map``, the return value of the callable is expected to be an Option itself; it is not automatically wrapped in Some().
     *
     * @implements \App\Contracts\Mappable::flatMap
     * @group unary
     *
     * @template S
     *
     * @param callable(T):\App\Contracts\Optional<S> $callable must return an Option
     *
     * @uses \App\Callables\transform
     * @uses \App\Concerns\InnerObject::object
     */
    final public function flatMap(mixed $callable): mixed
    {
        return \App\Callables\transform(
            arity: 1,
            transforms: $callable,
            seed: $this->object(),
        );
    }

    /**
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     *
     * @uses \App\Concerns\InnerObject::object
     * @uses \App\Options\foldLeft
     */
    final public function foldLeft($initial_value, $callable)
    {
        return \App\Options\foldLeft($callable, $initial_value, $this->object());
    }

    /**
     * @implements \App\Contracts\Foldable::foldRight
     * @group binary
     *
     * @uses \App\Concerns\InnerObject::object
     * @uses \App\Options\foldRight
     */
    final public function foldRight($initial_value, $callable)
    {
        return \App\Options\foldRight($callable, $initial_value, $this->object());
    }

    /**
     * Returns the value if available, or throws an exception otherwise.
     *
     * @implements \App\Contracts\HasValue::get
     * @group nonary
     *
     * @uses \App\Concerns\InnerObject::object
     *
     * @return T
     * @throws \RuntimeException If value is not available.
     */
    final public function get()
    {
        $result = $this->object();
        \assert(!($result instanceof Optional)); // prevent infinite recursion
        return $result;
    }

    /**
     * Returns an iterator for the inner value(s).
     *
     * @implements \IteratorAggregate::getIterator
     * @group accessor
     * @group multivalue
     * @group nonary
     * @group ordered
     *
     * @uses \ArrayIterator::__construct
     * @uses \App\Concerns\InnerObject::object
     */
    final public function getIterator(): \Traversable
    {
        $result = $this->object();
        \assert(!($result instanceof Optional)); // prevent infinite recursion

        if ($result instanceof \Traversable) {
            return $result;
        }

        return new \ArrayIterator([$result]);
    }

    /**
     * @group nonary
     * @group accessor
     * @group reductive
     *
     * @uses \App\Concerns\InnerObject::object
     *
     * @return boolean
     */
    final public function isBoolean(): bool
    {
        return $this->object() instanceof HasBooleanCast;
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
     * @group passthrough
     *
     * @return boolean
     */
    final public function isEmpty()
    {
        return false; // because it contains an object
    }

    /**
     * @group accessor
     * @group nonary
     * @group reductive
     *
     * @uses \App\Concerns\InnerObject::object
     */
    final public function isFloat(): bool
    {
        return $this->object() instanceof HasFloatCast;
    }

    /**
     * @group accessor
     * @group nonary
     * @group reductive
     *
     * @uses \App\Concerns\InnerObject::object
     */
    final public function isInteger(): bool
    {
        return $this->object() instanceof HasIntegerCast;
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
     * @group passthrough
     *
     * @return boolean
     */
    public function isNotEmpty()
    {
        return true; // because it contains an object
    }

    /**
     * @group nonary
     * @group accessor
     * @group reductive
     *
     * @uses \App\Concerns\InnerObject::object
     */
    final public function isString(): bool
    {
        return $this->object() instanceof \Stringable;
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in Some().
     *
     * @implements \App\Contracts\Mappable::map
     *
     * @template S
     *
     * @param callable(T):S $callable
     *
     * @uses \App\Options\wrap
     */
    final public function map($callable): Optional
    {
        return \App\Options\wrap($this->flatMap($callable));
    }

    /**
     * Returns an option for a specific property value represented or produced by the option.
     *
     * @implements \App\Contracts\HasProperties::property
     * @group binary
     * @group functional
     * @group fluent
     *
     * @uses \App\Concerns\InnerObject::object
     * @uses \App\Options\wrap
     */
    final public function property(mixed $property): mixed
    {
        $object = $this->object();

        $seed = $object->__isset($property) ? $object->__get($property) : null;

        return \App\Options\wrap($seed);
    }

    /**
     * @group variadic
     *
     * @uses \App\Callables\transform
     * @uses \App\Concerns\InnerObject::object
     */
    final public function tap(...$callables): void
    {
        \App\Callables\transform(1, $callables, $this->object());
    }
}
