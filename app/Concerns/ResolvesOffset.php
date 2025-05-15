<?php

namespace App\Concerns;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Collection;

trait ResolvesOffset
{
    /**
     * @group unary
     * @group resolving
     *
     * @uses \json_decode
     * @uses \is_array (native) Returns whether a variable is an array.
     * @uses \App\Concerns\ResolvesOffset::_makeIterable
     * @uses \ArrayIterator::__construct
     */
    private function _makeIterable(mixed $items): \Traversable
    {
        if ($items instanceof \Traversable) {
            return $items;
        }

        if (\is_array($items)) {
            return new \ArrayIterator($items);
        }

        if ($items instanceof Arrayable) {
            return new \ArrayIterator($items->toArray());
        }

        if ($items instanceof Jsonable) {
            return $this->_makeIterable(\json_decode($items->toJson(), true));
        }

        if ($items instanceof \JsonSerializable) {
            return $this->_makeIterable($items->jsonSerialize());
        }

        return new \ArrayIterator([$items]);
    }

    /**
     * @group unary
     * @group trapping
     *
     * @uses \App\Dumping\dump
     * @uses \App\Concerns\ResolvesOffset::resolveKey
     * @uses \App\Dumping\reflect
     */
    private function _resolveKey(mixed $key)
    {
        return \App\Dumping\dumpIfException($key, fn () => $this->resolveKey($key));
    }

    /**
     * @group binary
     * @group trapping
     *
     * @uses \App\Dumping\dumpLabeled
     * @uses \App\Concerns\ResolvesOffset::resolveValue
     */
    private function _resolveValue(mixed $value, mixed $key)
    {
        return \App\Dumping\rescueIfException(\compact('key', 'value'), fn () => $this->resolveValue($value));
    }

    /**
     * Results array of items from Collection or Arrayable.
     *
     * @extends \Illuminate\Support\Collection::getArrayableItems
     *
     * @uses \is_null (native) Finds whether a variable is NULL.
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \App\Concerns\ResolvesOffset::normalizeTraversable
     * @uses \App\Concerns\ResolvesOffset::_makeIterable
     *
     * @return array<TKey, TValue>
     */
    protected function getArrayableItems($items)
    {
        if (\is_null($items)) {
            return [];
        }
        return \iterator_to_array($this->normalizeTraversable($this->_makeIterable($items)));
    }

    /**
     * ❗ If this resolution throws exceptions, DataRow is probably not the appropriate vehicle for transforming the data.
     *
     * @group factory
     * @group junctive
     * @group variadic
     *
     * @uses \App\Concerns\ResolvesOffset::_resolveKey
     * @uses \App\Concerns\ResolvesOffset::_resolveValue
     */
    protected function normalizeTraversable(\Traversable $traversable): \Traversable
    {
        foreach ($traversable as $key => $value) {
            yield $this->_resolveKey($key) => $this->_resolveValue($value, $key);
        }
    }

    /**
     * @implements \App\Concerns\ResolvesOffset::resolveKey
     * @group unary
     * @group resolving
     */
    abstract protected function resolveKey(mixed $key): int|string;

    /**
     * @implements \App\Concerns\ResolvesOffset::resolveValue
     * @group unary
     * @group resolving
     */
    abstract protected function resolveValue(mixed $value): mixed;

    /**
     * Returns whether an item exists at an offset.
     *
     * @extends \Illuminate\Database\Eloquent\Collection::offsetExists
     * @group unary
     * @group accessor-by-key
     *
     * @param mixed $key Key or offset to resolve.
     *
     * @uses \App\Concerns\ResolvesOffset::_resolveKey
     * @uses \Illuminate\Database\Eloquent\Collection::offsetExists
     *
     * @return boolean
     */
    public function offsetExists(mixed $key): bool
    {
        return parent::offsetExists($this->_resolveKey($key));
    }

    /**
     * Retrieves the item at the given offset.
     *
     * @extends \Illuminate\Database\Eloquent\Collection::offsetGet
     * @implements \ArrayAccess::offsetGet
     * @group accessor
     * @group unary
     * @group accessor-by-key
     * @group selective
     *
     * @param mixed $key Key or offset to resolve.
     *
     * @uses \App\Concerns\ResolvesOffset::_resolveKey
     * @uses \App\Concerns\ResolvesOffset::_resolveValue
     * @uses \Illuminate\Support\Collection::offsetGet
     */
    public function offsetGet(mixed $key): mixed
    {
        return $this->_resolveValue(parent::offsetGet($this->_resolveKey($key)), $key);
    }

    /**
     * Puts an item in the collection by key.
     *
     * @extends \Illuminate\Database\Eloquent\Collection::offsetSet
     * @group binary
     * @group key-value-signature
     * @group mutator
     * @group mutator-by-key
     *
     * @param mixed $key Offset to set.
     * @param mixed $value The new value at the offset.
     *
     * @uses \App\Concerns\ResolvesOffset::_resolveKey
     * @uses \App\Concerns\ResolvesOffset::_resolveValue
     */
    public function offsetSet(mixed $key, mixed $value): void
    {
        $actual_key = $this->_resolveKey($key);
        $actual_value = $this->_resolveValue($value, $key);
        parent::offsetSet($actual_key, $actual_value);
    }

    /**
     * Unsets the item at a given offset.
     *
     * @extends \Illuminate\Database\Eloquent\Collection::offsetUnset
     * @group mutator
     * @group mutator-by-key
     * @group unary
     *
     * @param mixed $key Key or offset to resolve.
     *
     * @uses \Illuminate\Database\Eloquent\Collection::offsetUnset
     * @uses \App\Concerns\ResolvesOffset::_resolveKey
     */
    public function offsetUnset(mixed $key): void
    {
        $actual_key = $this->_resolveKey($key);
        parent::offsetUnset($actual_key);
    }
}
