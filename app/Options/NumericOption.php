<?php

namespace App\Options;

use App\Concerns\AlwaysGettable;
use App\Concerns\AlwaysScalar;
use App\Concerns\AlwaysSingleValue;
use App\Concerns\Deferable;
use App\Concerns\NeverEmpty;
use App\Concerns\Optional\NoProperties;
use App\Concerns\Optional\SelectThroughFilter;
use App\Constraints\Equals;
use App\Contracts\Dumps;
use App\Contracts\Emptyable;
use App\Contracts\Filterable;
use App\Contracts\Foldable;
use App\Contracts\HasValue;
use App\Contracts\Mappable;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Contracts\TransformativeInvoker;
use App\Exceptions\MethodNotValidException;
use App\Methods\MagicCall\MagicCallNeverValid;
use App\Methods\MagicGet\MagicGetNotValid;
use Illuminate\Support\Collection;
use PhpOption\Option;
use PHPUnit\Framework\Constraint\Constraint;

final class NumericOption implements \App\Contracts\Deferable, Dumps, Emptyable, Filterable, Foldable, HasValue, Mappable, Normalizable, Optional, TransformativeInvoker
{
    use AlwaysGettable;
    use AlwaysScalar;
    use Deferable;    // uses AlwaysDefined, AlwaysSingleValue, CountIsAlwaysOne
    use MagicCallNeverValid;
    use MagicGetNotValid;
    use NeverEmpty;
    use NoProperties;
    use SelectThroughFilter;

    /**
     * The underlying value.
     */
    protected $_value;

    /**
     * @group mutator
     * @group unary
     *
     * @uses \App\Options\unwrap
     * @uses \is_numeric (native) Returns whether or not a variable is a number or a numeric string.
     *
     * @throws \AssertionError
     */
    public function __construct(mixed $value)
    {
        $this->_value = \App\Options\unwrap($value);

        \assert(\is_numeric($this->_value));
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
     * @uses \App\Callables\normalizeTransform
     */
    public function __invoke(...$transforms)
    {
        $result = $this->_value;

        foreach (\App\Callables\normalizeTransform($transforms) as $transform) {
            $result = $transform($result);
        }
        return $result;
    }

    /**
     * Triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.
     * Dynamically check a property exists on the underlying object.
     *
     * @group accessor
     * @group accessor-by-key
     * @group magic
     * @group unary
     *
     * @param string $name Name of the property being called.
     *
     * @return bool
     */
    public function __isset(string $name)
    {
        return false;
    }

    /**
     * Returns a representation of this object as a string.
     *
     * @group magic
     * @group magic-tostring-signature
     * @group nonary
     * @group resolving
     */
    public function __toString(): string
    {
        return (string) $this->_value;
    }

    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     */
    protected function internalArguments(): \Traversable
    {
        yield $this->_value;
    }

    /**
     * @implements \App\Interfaces\Contracts\Booleanable::asBoolean
     * @group accessor
     * @group nonary
     * @group reductive
     *
     * @uses \App\Exceptions\MethodNotValidException::__construct
     *
     * @return boolean
     * @throws \App\Exceptions\MethodNotValidException
     */
    public function asBoolean(): bool
    {
        throw new MethodNotValidException($this, __METHOD__);
    }

    /**
     * Returns a representation of this object as a float.
     *
     * @implements \App\Interfaces\Contracts\Floatble::asFloat
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function asFloat(): float
    {
        return (float) ($this->_vaue);
    }

    /**
     * Returns a representation of this object as an integer.
     *
     * @implements \App\Interfaces\Contracts\Integerable::asInteger
     * @group accessor
     * @group nonary
     * @group reductive
     *
     * @return integer
     */
    public function asInteger(): int
    {
        return (int) ($this->_vaue);
    }

    /**
     * Runs the given Closure bound to this item then returns the result.
     *
     * @group accessor
     * @group unary
     *
     * @param null|callable $predicate_callable Callback to execute on the inner value.
     *
     * @uses \App\Callables\makeClosure
     * @uses \App\Dumping\dump
     * @uses \App\Options\wrap
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Closure::bindTo
     * @uses \LogicException::__construct
     *
     * @throws \AssertionError
     * @throws \LogicException
     */
    public function assert(mixed $predicate_callable): static
    {
        try {
            $closure = \App\Callables\makeClosure($predicate_callable);
            \assert($closure->bindTo($this));
            return \App\Options\wrap($this);
        } catch (\AssertionError $exception) {
            \App\Dumping\dump($this); // dumps depending on environment and verbosity
            throw new \LogicException('assertion against proxy failed');
        } catch (\Throwable $exception) {
            \App\Dumping\dump($this); // dumps depending on environment and verbosity
            throw $exception;
        }
    }

    /**
     * Returns a representation of this object as a string.
     *
     * @implements \App\Interfaces\Contracts\Stringable::asString
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function asString(): string
    {
        return (string) ($this->_value);
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
        \App\Dumping\dump($this->_value); // 🔒
        return $this;
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
     *
     * @return boolean
     */
    public function equals(mixed $value): bool
    {
        static $constraint;
        $constraint ??= new Equals($this->_value);
        return $constraint->evaluate($value, '', true);
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
        return \App\Callables\filter($predicate, $this, $this->_value);
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
        return \App\Callables\filterNot($predicate, $this, $this->_value);
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     * The return value of the callable is expected to be an Option itself; it is not automatically wrapped in Some().
     *
     * @implements \App\Contracts\Mappable::flatMap
     * @group unary
     *
     * @uses \App\Callables\transform
     */
    public function flatMap($callable): Optional
    {
        return \App\Callables\transform(arity: 1, transforms: $callable, seed: $this->_value);
    }

    /**
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     *
     * @uses \App\Options\foldLeft
     * @uses \App\Options\foldLeft
     */
    public function foldLeft($initial_value, $callable)
    {
        return \App\Options\foldLeft($callable, $initial_value, $this->_value);
    }

    /**
     * @implements \App\Contracts\Foldable::foldRight
     * @group binary
     *
     * @uses \App\Options\foldRight
     * @uses \App\Options\foldRight
     */
    public function foldRight($initial_value, $callable)
    {
        return \App\Options\foldRight($callable, $initial_value, $this->_value);
    }

    /**
     * Returns the value if available, or throws an exception otherwise.
     *
     * @implements \App\Contracts\HasValue::get
     * @group nonary
     *
     * @uses \App\Options\get
     *
     * @throws \RuntimeException If value is not available.
     */
    public function get()
    {
        return $this->_value ?? throw new \RuntimeException('value is not available');
    }

    /**
     * Returns an iterator (either as an explicit implementation of \Traversable or an implicit implementation of \Generator with yield statements) that iterates through the component items of this object.
     *
     * @implements \IteratorAggregate::getIterator
     * @group accessor
     * @group multivalue
     * @group nonary
     * @group ordered
     */
    public function getIterator(): \Traversable
    {
        yield $this->_value;
    }

    /**
     * @group accessor
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    public function isBoolean(): bool
    {
        return false;
    }

    /**
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function isFloat(): bool
    {
        return true;
    }

    /**
     * @group accessor
     * @group nonary
     * @group reductive
     *
     * @uses \is_int (native) Returns whether the given variable is an integer.
     */
    public function isInteger(): bool
    {
        return \is_int($this->_value);
    }

    /**
     * Returns whether the collection is empty or not.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isEmpty is not type-declared.
     *
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @implements \Illuminate\Support\Optional::isNotEmpty
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    public function isNotEmpty()
    {
        return true;
    }

    /**
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function isString(): bool
    {
        return false;
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in Some(). If the option is empty, then the callable is not applied.
     *
     * @implements \App\Contracts\Mappable::map
     * @group unary
     *
     * @uses \App\Callables\transform
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
        return $this->_value;
    }

    /**
     * @group variadic
     *
     * @uses \App\Callables\transform
     */
    public function tap(...$callables): void
    {
        \App\Callables\transform(1, $callables, $this->_value);
    }
}
