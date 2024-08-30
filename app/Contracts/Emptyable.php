<?php

namespace App\Contracts;

/**
 * These methods should not throw unless there is an actual logic error that makes determining emptyness impossible.
 *
 * @see \Ds\Collection::isEmpty
 * @see \Ds\Pair::isEmpty
 */
interface Emptyable
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
     * @implements \App\Contracts\Emptyable::isEmpty
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    public function isEmpty();

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
    public function isNotEmpty();
}
