<?php

namespace App\Concerns;

/**
 * 💢 Do not use with \ArrayObject. ArrayObject::count returns the number of *public properties* in the ArrayObject, not the number of elements. This results in ArrayObject::count returning 1 for an empty ArrayObject. See https://www.php.net/manual/en/arrayobject.count.php.
 *
 * usage:
 * use \App\Concerns\EmptyByCount;
 */
trait EmptyByCount
{
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
     * @uses \is_countable (native) Returns whether a variable is countable.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     *
     * @return boolean
     * @throws \AssertionError
     */
    public function isEmpty()
    {
        \assert(\is_countable($this));
        return \count($this) === 0;
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
     * @uses \is_countable (native) Returns whether a variable is countable.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     *
     * @return boolean
     * @throws \AssertionError
     */
    public function isNotEmpty()
    {
        \assert(\is_countable($this));
        return \count($this) > 0;
    }
}
