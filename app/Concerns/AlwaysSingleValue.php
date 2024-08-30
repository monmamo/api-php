<?php

namespace App\Concerns;

use App\Concerns\Optional\NoOffsets;
use App\Concerns\Optional\NoProperties;
use App\Methods\Count\CountIsAlwaysOne;
use App\Methods\MagicGet\MagicGetNotValid;
use App\Options\ThrowingOption;

/**
 * usage:
 * use \App\Concerns\AlwaysSingleValue;
 *
 * DO NOT define these methods here:
 * - isEmpty
 * - getIterator
 *
 * DO NOT use these traits:
 */
trait AlwaysSingleValue
{
    use CountIsAlwaysOne;
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
    public function __isset(string $name)
    {
        return false;
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
    public function offsetExists(mixed $key): bool
    {
        return false;
    }

    /**
     * Retrieves the item at the given offset.
     *
     * TODO Return a ThrowingOption instead.
     *
     * @implements \ArrayAccess::offsetGet
     * @group accessor
     * @group accessor-by-key
     * @group selective
     * @group unary
     *
     * @param mixed $key Offset to get or check.
     *
     * @uses \App\Options\unwrap
     * @uses \App\Options\ThrowingOption::forMissingOffset
     */
    public function offsetGet(mixed $key): mixed
    {
        return ThrowingOption::forMissingOffset(\App\Options\unwrap($this), $key);
    }
}
