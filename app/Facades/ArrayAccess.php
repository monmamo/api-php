<?php

namespace App\Facades;

use App\Options\ThrowingOption;

abstract class ArrayAccess
{
    /**
     * Returns a boolean indicating whether an offset exists or or represents a retrievable value in this collection.
     *
     * @implements \ArrayAccess::offsetExists
     * @group accessor-by-key
     * @group binary
     * @group reductive
     *
     * @param mixed $offset Offset to check.
     *
     * @uses \array_key_exists
     * @uses \is_array (native) Returns whether a variable is an array.
     *
     * @return boolean True if the offset exists in this collection; false if it doesn't.
     */
    public static function offsetExists(mixed $source, mixed $offset): bool
    {
        return match (true) {
            \is_array($source) => \array_key_exists($offset, $source),
            $source instanceof \ArrayAccess => $source->offsetExists($offset),
            default => false,
        };
    }

    /**
     * Returns the value at the offset, or throws an appropriate exception.
     *
     * @implements \ArrayAccess::offsetGet
     * @group accessor
     * @group accessor-by-key
     * @group binary
     * @group resolving
     * @group selective
     *
     * @param mixed $offset Offset to retrieve.
     *
     * @uses \App\Options\ThrowingOption::forMissingOffset
     * @uses \is_array (native) Returns whether a variable is an array.
     */
    public static function offsetGet(mixed $source, mixed $offset): mixed
    {
        return match (true) {
            \is_array($source) => $source[$offset],
            $source instanceof \ArrayAccess => $source->offsetGet($offset),
            default => ThrowingOption::forMissingOffset($source, $offset)
        };
    }

    /**
     * Sets the corresponding data value at the offset.
     *
     * @implements \ArrayAccess::offsetSet
     * @group mutator
     * @group mutator-by-key
     * @group trinary
     *
     * @param mixed $offset Offset to set.
     * @param mixed $value New value.
     */
    public static function offsetSet(mixed $target, mixed $offset, $value): void {}

    /**
     * Unsets the data value at the offset.
     *
     * @implements \ArrayAccess::offsetUnset
     * @group binary
     * @group mutator
     * @group mutator-by-key
     *
     * @param mixed $offset Offset to unset.
     */
    public static function offsetUnset(mixed $target, mixed $offset): void {}
}
