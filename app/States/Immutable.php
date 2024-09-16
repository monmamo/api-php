<?php

namespace App\States;

trait Immutable
{
    /**
     * Runs when writing data to inaccessible (protected or private) or non-existing properties.
     *
     * @group mutator
     * @group binary
     * @group magic
     *
     * @param string $name Name of the property to set.
     * @param mixed $value New value of the property.
     *
     * @uses \App\Exceptions\SingleValueException::__construct
     * @uses \App\States\Immutable::_makeImmutableException
     * @uses \LogicException::__construct
     *
     * @throws \App\Exceptions\SingleValueException
     */
    final public function __set(string $name, $value): void
    {
        throw $this->_makeImmutableException(
            __METHOD__,
            new \LogicException("request to set property '{$name}'"),
        );
    }

    /**
     * @group mutator
     * @group unary
     * @group magic
     *
     * @uses \App\States\Immutable::_makeImmutableException
     * @uses \LogicException::__construct
     *
     * @throws \App\Exceptions\SingleValueException
     */
    final public function __unset(string $name): void
    {
        throw $this->_makeImmutableException(
            __METHOD__,
            new \LogicException("Request to unset property '{$name}'"),
        );
    }

    /**
     * @group binary
     * @group generative
     *
     * @uses \LogicException::__construct
     *
     * @throws \LogicException
     */
    private function _makeImmutableException(string $method, ?\Throwable $previous = null): \LogicException
    {
        return new \LogicException('object is immutable');
    }

    /**
     * @implements \Ds\Sequence::allocate
     * @group mutator
     * @group unary
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function allocate(int $capacity): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * @implements \Ds\Sequence::apply
     * @group mutator
     * @group unary
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function apply(callable $callback): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * Removes all values or items from the object.
     *
     * @implements \Ds\Collection::clear
     * @group mutator
     * @group nonary
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function clear(): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * @implements \Ds\Sequence::insert
     * @group mutator
     * @group variadic
     *
     * @param mixed[] $values
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function insert(int $index, ...$values): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * Sets the value at the offset.
     *
     * Throws an exception.
     *
     * @implements \ArrayAccess::offsetSet
     * @group mutator
     * @group binary
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function offsetSet(mixed $offset, mixed $value): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * Unsets the value at the offset.
     *
     * Throws an exception.
     *
     * @implements \ArrayAccess::offsetUnset
     * @group mutator
     * @group unary
     *
     * @param mixed $offset Offset to unset.
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function offsetUnset(mixed $offset): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * @group mutator
     * @group nonary
     *
     * @throws \App\Database\QueryFailure
     */
    final public function pop(): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * @implements \Ds\Sequence::push
     * @group mutator
     * @group variadic
     *
     * @param mixed[] $values
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function push(...$values): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * Signature of Illuminate\Support\Stringable::remove.
     *
     * @group mutator
     * @group unary
     *
     * @param iterable<string>|string $search
     * @param bool $caseSensitive
     *
     * @return static
     * @throws \LogicException
     */
    final public function remove($search, $caseSensitive = true)
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * Signature of Illuminate\Support\Stringable::reverse.
     *
     * @implements \Ds\Sequence::reverse
     * @group mutator
     * @group variadic
     *
     * @param mixed[] ...
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function reverse(): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * @implements \Ds\Sequence::rotate
     * @group mutator
     * @group unary
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function rotate(int $rotations): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * @implements \Ds\Sequence::set
     * @group mutator
     * @group binary
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function set(int $index, $value): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * @group mutator
     * @group nonary
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \App\Database\QueryFailure
     */
    final public function shift(): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * Sorts the collection in-place.
     *
     * Happens to have the same signature as \Ds\Sequence::sort.
     *
     * @implements \App\Interfaces\Abilities\Sortable::sort
     * @group unary
     * @group mutator
     *
     * @param \App\Interfaces\Comparator $comparator Comparator function (see docs/comparator.md).
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function sort(?callable $comparator = null): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }

    /**
     * @implements \Ds\Sequence::unshift
     * @group variadic
     *
     * @uses \App\States\Immutable::_makeImmutableException
     *
     * @throws \LogicException
     */
    final public function unshift(...$values): void
    {
        throw $this->_makeImmutableException(__METHOD__);
    }
}
