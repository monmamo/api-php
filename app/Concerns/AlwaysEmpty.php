<?php

namespace App\Concerns;

use App\Concerns\Optional\NoOffsets;
use App\Concerns\Optional\NoProperties;
use App\Contracts\Optional;
use App\Exceptions\MethodNotValidException;
use App\Methods\MagicGet\MagicGetNotValid;
use App\Options\NullOption;
use App\Options\ThrowingOption;
use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\VarDumper\VarDumper;

/**
 * usage:
 * use \App\Concerns\AlwaysEmpty;
 */
trait AlwaysEmpty
{
    use MagicGetNotValid;
    use NoOffsets;
    use NoProperties;

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
    final public function __isset(string $name)
    {
        return false;
    }

    /**
     * Returns the number of elements in the object.
     *
     * @implements \Countable::count
     * @group nonary
     * @group accessor
     * @group reductive
     */
    final public function count(): int
    {
        return 0;
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns true, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filter
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     */
    final public function filter(Constraint $predicate): Optional
    {
        return new NullOption();
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns false, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filterNot
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     */
    final public function filterNot(Constraint $predicate): Optional
    {
        return new NullOption();
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     *
     * @implements \App\Contracts\Mappable::flatMap
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     */
    final public function flatMap($callable): mixed
    {
        return null;
    }

    /**
     * Binary operator for the initial value and the option's value.
     *
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     */
    final public function foldLeft($initialValue, $callable)
    {
        return $initialValue;
    }

    /**
     * Binary operator for the initial value and the option's value.
     *
     * @implements \App\Contracts\Foldable::foldRight
     * @group binary
     */
    final public function foldRight($initialValue, $callable)
    {
        return $initialValue;
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
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    final public function isEmpty()
    {
        return true;
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
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    final public function isNotEmpty()
    {
        return false;
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in Some().
     *
     * @implements \App\Contracts\Mappable::map
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     */
    final public function map($callable): Optional
    {
        return new NullOption();
    }

    /**
     * Returns whether an item exists at an offset.
     *
     * @implements \ArrayAccess::offsetGet
     * @group accessor
     * @group accessor-by-key
     * @group nonary
     *
     * @param mixed $key Offset to check.
     *
     * @uses \Illuminate\Support\Arr::accessible
     * @uses \Illuminate\Support\Arr::exists
     */
    final public function offsetExists(mixed $key): bool
    {
        return false;
    }

    /**
     * Retrieves the item at the given offset.
     *
     * @implements \ArrayAccess::offsetGet
     * @group accessor
     * @group accessor-by-key
     * @group selective
     * @group unary
     *
     * @param mixed $key Offset to get or check.
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \sprintf (native) Returns a formatted string.
     * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
     * @uses \App\Options\ThrowingOption::__construct
     * @uses \ValueError::__construct
     */
    final public function offsetGet(mixed $key): mixed
    {
        return new ThrowingOption(
            new \ValueError(\sprintf('cannot access offset %s on %s', $key, \get_debug_type($this))),
            \compact('source', 'offset'),
        );
    }

    /**
     * Sets the item at a given offset.
     *
     * @implements \ArrayAccess::offsetSet
     * @group binary
     * @group key-value-signature
     * @group mutator
     * @group mutator-by-key
     *
     * @param mixed $key Offset to set.
     * @param mixed $value New value at the offset.
     *
     * @uses  \Symfony\Component\VarDumper\VarDumper::dump
     * @uses \App\Dumping\inDumpingContext
     * @uses \App\Exceptions\MethodNotValidException::__construct
     *
     * @throws \App\Exceptions\MethodNotValidException
     */
    final public function offsetSet(mixed $key, mixed $value): void
    {
        if (\App\Dumping\inDumpingContext()) {
            VarDumper::dump($key, 'key');
        }

        throw new MethodNotValidException($this, 'offsetSet');
    }

    /**
     * Unsets the item at a given offset.
     *
     * @implements \ArrayAccess::offsetUnset
     * @group mutator
     * @group mutator-by-key
     * @group unary
     *
     * @param mixed $key Offset to unset.
     *
     * @uses \Symfony\Component\VarDumper\VarDumper::dump
     * @uses \App\Dumping\inDumpingContext
     * @uses \App\Exceptions\MethodNotValidException::__construct
     *
     * @throws \App\Exceptions\MethodNotValidException
     */
    final public function offsetUnset(mixed $key): void
    {
        if (\App\Dumping\inDumpingContext()) {
            VarDumper::dump($key, 'key');
        }

        throw new MethodNotValidException($this, 'offsetUnset');
    }

    /**
     * Lets all values through except the passed value.
     *
     * @implements \App\Contracts\Filterable::reject
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     */
    final public function reject(mixed $value): Optional
    {
        return new NullOption();
    }

    /**
     * Filters all but the passed value.
     *
     * @implements \App\Contracts\Filterable::select
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     */
    final public function select(mixed $value): Optional
    {
        return new NullOption();
    }
}
